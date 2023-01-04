<?php

use Illuminate\Support\Facades\Route;
use App\Models\birthday;
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

// Route::head('/', function () {
//     return view('welcome');
// });
Route::view('h', 'welcome');

Route::get('profile', 'App\Http\Controllers\IController@register');
Route::post('submit', 'App\Http\Controllers\IController@create');
Route::get('send-mail', 'App\Http\Controllers\IController@date');
// Route::get('send-mail', function () {
//     $ldate = date('Y-m-d');
//     $users = birthday::whereMonth('dob', date('m'))
//         ->whereDay('dob', date('d'))
//         ->get();
//     foreach ($users as $user) {

//         dispatch(new App\Jobs\birthdaymail($user));
//         echo "send mail sucessfully </br> ";
//         // dd('send mail sucessfully');
//         // dd("$user->email");
//         // print_r($user->email);
//     }
// });
