<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Category;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index($id) {
        $menus = Menu::all();
        $categories = Category::all();
        $user = User::find($id);
        // echo $menus;
        return view('allMenu', ['menus' => $menus, 'categories' => $categories, 'user' => $user]);
    }

    public function buy(Request $request) {
        $insert = Transaction::insert([
            'userId' => $request['userId'],
            'menuId' => $request['menuId'],
            'completed' => 1,
            'created_at' => Carbon::now()
        ]);
        
        return [
            'code' => $insert ? '200' : '400'
        ];
    }
}
