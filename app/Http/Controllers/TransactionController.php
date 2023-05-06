<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index($id) {
        $transactions = Transaction::where('userId', $id)->join('menus', 'menus.id', '=', 'transactions.menuId')->get();
        $user = User::where('id', $id)->first();

        return view('transactions', ['transactions' => $transactions, 'user' => $user]);
    }
}
