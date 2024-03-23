<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get("/post", [PostController::class, "index"]);
Route::resource("/post", PostController::class); // tạo url  theo từng function 
Route::get("/post/create", [PostController::class, "create"]);
Route::get("/", [PageController::class, "index"]);
Route::get("/about", [PageController::class, "about"]);


Route::get('product', [
    ProductController::class, // kiểu dữ liệu
    'index'                   // hàm index trong controllerController được thực thi
])->name('product');

// Route::get('product/{id}', [
//     ProductController::class,
//     'detail'
// ])->where('id', '[0-9]+'); // validate param

// Route::get('product/{productName}/{id}', [
//     ProductController::class,
//     'detail'
// ])->where([
//             'productName' => '[a-zA-Z0-9]+',
//             'id' => '[0-9]+'
//         ]); // validate param

Route::get('product/{productName}', [
    ProductController::class,
    'detail'
]);

// Route::get('/', function () {
//     return view('home'); // response a View
//     // return env('MY_NAME');
// })->where('productName','[a-zA-Z0-9]+');

/*
Route::get('/user', function () {
    // return view('welcome');
    return 'User page'; // response String
});
Route::get('/food', function () {
    // return view('welcome');
    return ['sushi', 'sashimi', 'tofu'];// response array
});
Route::get('/aboutMe', function () {
    // return view('welcome');
    return response()->json([
        'name' => 'Le Trung Hieu',
    ]);// response obj
});
// response another request = redirect
// ::  : gọi sang phương thức static
Route::get('/something', function () {
    return redirect('/food');
});
*/
