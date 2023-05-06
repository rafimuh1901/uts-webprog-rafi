<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index() {
        // $user = User::where('id', 1)->first();
        // return view('index', ['user' => $user]);
        return redirect()->route('home.show', 1);
    }

    public function show($id) {
        $user = User::where('id', $id)->first();
        return view('index', ['user' => $user]);
    }

    public function switchAccount($id) {
        if (isset($id)) {
            $newUser = User::where('id', '!=', $id)->first();
        } else {
            $newUser = User::where('id', 1)->first();
        }
        return redirect()->route('home.show', $newUser->id);
    }
}
