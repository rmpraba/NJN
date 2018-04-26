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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function()
{
    return View::make('pages.login');
});
Route::get('home', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
Route::get('tdhome', function()
{
    return View::make('pages.tdhome');
});
Route::get('tchome', function()
{
    return View::make('pages.tchome');
});
// Route::get('pftarget', function()
// {
//     return View::make('tcview.pftarget');
// });
// Route::post('/login', function()
// {
//     echo "ya its working";
// });
Route::get('/pftarget', 'pftargetfetchController@pftargetfetch');
Route::get('/fetchbatch', 'fetchbatchController@fetchbatch');
Route::post('/login', 'loginController@login');