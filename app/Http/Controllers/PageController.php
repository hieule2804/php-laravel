<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        $name = "Hieu";
        // $names = array('hoang', 'david', 'michecl', 'john');
        $names = [];
        return view('about', [
            'names' => $names
        ]);
    }
}
