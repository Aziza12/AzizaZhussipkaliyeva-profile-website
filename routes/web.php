<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('about-me', function () {
    return view('about_me');
});
Route::get('contact-me', function () {
    return view('contact_me');
});
Route::get('/db', 'Users@index');
Route::get('post/create', function () {
    DB::table('post')->insert([
        'Title' =>'New title',
        'Body' => 'new body'
    ]);
});
Route::get('post', function () {
    $post2 = Post::find(1);
    return $post2;
});
