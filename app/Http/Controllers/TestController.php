<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // テスト用コード
    public function test() {
        return view('test');
    }
}
