<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/menus', function () {
    $menus = Menu::paginate(4);
    return view('menus', ['menus' => $menus]);
});
Route::get('/menus/{menu:slug}', function (Menu $menu) {
    return view('menu', ['menu' => $menu]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
