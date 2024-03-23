<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //how to pass data to view?
        $title = "laravel Course from Le Trung Hieu";
        $x = 1;
        $y = 2;
        // return view('product.index', compact('title', 'x', 'y')); cách 1
        // compact can send many variable
        $name = 'Hieu';
        // return view('product.index')->with('name', $name);
        // 'with' method can only send 1 parameter
        //send an associative array
        $myphone = [
            'name' => 'IP14',
            'year' => 2022,
            'iaFavorited' => true,
        ];
        // return view('product.index', compact('myphone'));
        // return view('product.index', [
        //     'myphone' => $myphone
        // ]);
        //print_r(route('product')); // hiện ra thông tin của route product
        return view('product.index');
    }
    public function about()
    {
        return 'This is About page';
    }
    public function detail($productName, $id)
    {
        return "product id =   $id  product name $productName";

    }
    // public function detail($productName)
    // {
    //     // return 'product id = ' . $id;
    //     $phones = [
    //         'iphone15' => 'iphone 15',
    //         'samsung' => 'samsung'
    //     ];
    //     return view('product.index', [
    //         'product' => $phones[$productName] ?? 'unknow Product' //coalescing / default value
    //     ]);
    // }
}
