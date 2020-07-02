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
use App\Events\EventWasTriggered;
use App\Calibration;

Route::get('/', function () {
    return view('controller');
});

Route::get('/a', function(){
  $size = request('size');
  $numbers = str_shuffle(implode('', array_rand(range(0, 9), 5)));
  $numbers2 = str_shuffle(implode('', array_rand(range(0, 9), 5)));
  $numbers3 = str_shuffle(implode('', array_rand(range(0, 9), 5)));
  $numbers4 = str_shuffle(implode('', array_rand(range(0, 9), 5)));
  $numbers5 = str_shuffle(implode('', array_rand(range(0, 9), 5)));
  $numbers6 = str_shuffle(implode('', array_rand(range(0, 9), 5)));
  $hotv = str_shuffle(implode('', array_rand(range(0, 3), 4)));
  $hotv2 = str_shuffle(implode('', array_rand(range(0, 3), 4)));
  $hotv3 = str_shuffle(implode('', array_rand(range(0, 3), 4)));
  $hotv4 = str_shuffle(implode('', array_rand(range(0, 3), 4)));
  $hotv5 = str_shuffle(implode('', array_rand(range(0, 3), 4)));
  $hotv6 = str_shuffle(implode('', array_rand(range(0, 3), 4)));

  event(new EventWasTriggered($size, $numbers, $numbers2, $numbers3, $numbers4, $numbers5, $numbers6, $hotv, $hotv2, $hotv3, $hotv4, $hotv5, $hotv6));

  return $numbers;
});

// Route::get('/calibrate', function(){
//   $size = request('size');
//   event(new EventwasTriggered($size));
// });



Route::get('/b', function(){
  $calibration = DB::table('calibrations')->find(1);

  return view('patient')->with('calibration', $calibration);
});



Route::get('/insert', 'CalibrationController@insert');
Route::get('/mirror', 'CalibrationController@mirror');
Route::get('/mirrorGet', 'CalibrationController@mirrorGet');
