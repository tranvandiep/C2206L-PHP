<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index(Request $request) {
        // echo $request->a;
        // $stdList = DB::table('students')->get();
        $stdList = DB::table('students');

        if(isset($request->s) && $request->s != "") {
            $stdList = $stdList->where('fullname', 'like', '%'.$request->s.'%');
        }

        $stdList = $stdList->paginate(10);

        $index = 0;
        if(isset($request->page) && $request->page > 0) {
            $index = ($request->page - 1) * 10;
        }

        return view('students.index')->with([
            'title' => 'Trang Chu',
            'stdList' => $stdList,
            'index' => $index
        ]);
    }

    public function create(Request $request) {
        return view('students.create')->with([
            'title' => 'Them moi sinh vien'
        ]);
    }


    public function post(Request $request) {
        $fullname = $request->fullname;
        $email = $request->email;
        $birthday = $request->birthday;
        $address = $request->address;

        DB::table('students')->insert([
            'fullname' => $fullname,
            'email' => $email,
            'birthday' => $birthday,
            'address' => $address
        ]);

        return redirect()->route('students.index');
    }

    public function edit(Request $request, $id) {
        $std = DB::table('students')
            ->where('id', $id)
            ->get();
        if($std == null || count($std) == 0) {
            return redirect()->route('students.index');
        }

        return view('students.edit')->with([
            'title' => 'Sua thong tin sinh vien',
            'std' => $std[0]
        ]);
    }

    public function update(Request $request) {
        $fullname = $request->fullname;
        $email = $request->email;
        $birthday = $request->birthday;
        $address = $request->address;

        DB::table('students')
        ->where('id', $request->id)
        ->update([
            'fullname' => $fullname,
            'email' => $email,
            'birthday' => $birthday,
            'address' => $address
        ]);

        return redirect()->route('students.index');
    }

    public function delete(Request $request) {
        DB::table('students')
            ->where('id', $request->id)
            ->delete();

        return redirect()->route('students.index');
    }
}
