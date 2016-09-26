<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*Route::get('/', ['uses'=>'HomeController@index','as'=>'home']);*/


Route::auth();

Route::get('/', ['uses' => 'MeetupController@index','as' => 'meetup.index']);
Route::get('meetups/create',['uses' => 'MeetupController@create', 'as' => 'meetup.create']);
Route::post('meetups/create',['uses'=>'MeetupController@store','as'=>'meetup.store']);
Route::get('meetups/{id}',['uses'=>'MeetupController@show','as'=>'meetup.show']);
Route::get('meetups/{id}/edit',['uses'=>'MeetupController@edit','as'=>'meetup.edit']);
Route::patch('meetups/{id}',['uses'=>'MeetupController@update','as'=>'meetup.update']);
Route::delete('meetups/{id}',['uses'=>'MeetupController@destroy','as'=>'meetup.destroy']);
Route::patch('meetups/{id}',['uses' =>'MeetupController@register','as'=>'meetup.register']);



