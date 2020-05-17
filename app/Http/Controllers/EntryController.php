<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EntryController extends Controller
{
    //
    public function index()
    {
        $entryes = Entry::all();
        foreach ($entryes as $entry) {
            var_dump($entry->content);
        }
    }
}
