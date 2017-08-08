<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/', 'ArticleController@index1')->name('home');
Route::get('/kursus-web/', 'ArticleController@index')->name('kursus-web');
Route::get('/read/article/{judul}/{id}', 'ArticleController@readArticle')->name('readArticle');
Route::get('/pemrograman/kategori/{bahasa_pem}', 'ArticleController@showCss')->name('showCss');

Route::get('/profile/{name}', 'ArticleController@showProfile')->name('profilepub');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/profile', 'DashboardController@showProfile')->name('profile');

Route::get('/dashboard/table-article', 'DashboardController@showArticle')->name('showArticle');
Route::get('/dashboard/table-article-web', 'DashboardController@showArticleweb')->name('showArticleweb');
Route::post('/dashboard/delete-article/{id}', 'DashboardController@deleteArticle')->name('deleteArticle');
Route::get('/dashboard/tambah-article', 'DashboardController@tambahArticle')->name('tambahArticle');
Route::post('/dashboard/addArticle', 'DashboardController@addArticle')->name('addArticle');
Route::get('/dashboard/edit-article/{id}', 'DashboardController@editArticle')->name('editArticle');
Route::post('/dashboard/updateArticle', 'DashboardController@updateArticle')->name('updateArticle');

Route::post('/dashboard/updateProfile/{id}', 'DashboardController@updateProfile')->name('updateProfile');
Route::get('/contact', 'ArticleController@showContact')->name('contact');
Route::post('/kirim-pesan', 'ArticleController@kirimPesan')->name('kirimPesan');

Route::get('dashboard/pesan', 'DashboardController@showPesan')->name('showPesan');
Route::get('/search', 'ArticleController@cariJudul')->name('cariJudul');
Route::post('/kirim-comment','ArticleController@kirimComment')->name('kirimComment');
