<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // テスト用コード
    public function users() {
        $users = User::all();
        return view('users', compact('users'));
    }
}
