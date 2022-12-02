<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        return 'Xin chao okok';
    }

    public function abc(Request $request)
    {
        $title = '<h2>Xin Chaoasdadasd ABC</h2>';

        $subjectList = ['Casdasd', 'HTML/asdasdasCSS/JS', 'SQL Server'];

        return view('list')->with([
            't' => $title,
            'subjectList' => $subjectList
        ]);
    }

    public function test4(Request $request) {
        return view('test2');
    }

    public function showList(Request $request) {
        $title = '<h2>Xin Chao ABC</h2>';

        $subjectList = ['C', 'HTML/CSS/JS', 'SQL Server'];

        return view('list')->with([
            't' => $title,
            'subjectList' => $subjectList
        ]);
    }
}
