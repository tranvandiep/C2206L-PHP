<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        return 'Xin chao okok';
    }

    public function test4(Request $request) {
        return view('test2');
    }
}
