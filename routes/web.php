<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogControllerr;
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
Route::get('blog/index',[BlogControllerr::class, 'index']);
Route::get('blog/create',function(){
    return view('post.create');
});
Route::post('blog/create',[BlogControllerr::class, 'store'])->name('add-blog');
Route::get('post/{id}',[BlogControllerr::class, 'get_post']);

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile', 'UploadFileController@showUploadFile');

Route::get('/multiuploads','UploadController@uploadForm');
Route::post('/multiuploads', 'UploadController@uploadSubmit');

Route::get('mail/send', 'MailController@send');

Route:: get ('/{lang}', function ($lang){
    App::setlocale($lang);
    return view('home');
});