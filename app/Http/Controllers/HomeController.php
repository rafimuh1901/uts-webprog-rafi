<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function switchAccount(Request $request) {
        // return $request['id'];
        // $id = $request->getContent();
        // dd($id);
        // $newUser = User::where('id', '!=', )->first();
        // view()->share('activeUser', $newUser);
        // Config::set('global.activeUser', $user);
        $id = $request['id'];
        return view('index')->with(compact('id'));
    }
}
