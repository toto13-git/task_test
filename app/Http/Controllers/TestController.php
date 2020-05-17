<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();
        // dd($values);
        //ddは中にどんなデータが格納されているのか確認する

        //$valuesをviewファイルに持っていくには
        //compact()関数を使う
        //compact('values'));
        return view('tests.test', compact('values'));
    }
}
