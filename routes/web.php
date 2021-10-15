<?php


use Illuminate\Support\Facades\Route;

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
    return view('Startpage');
});
route::get('owners', function () {

    return redirect  ('http://192.168.10.1:8000/getOwners');
})->name("getOwners");

route::get('passengers', function () {
    return redirect  ('http://192.168.10.1:8000/getPassengers');
})->name("getPassengers");

route::get('all', function () {
    return redirect  ('http://192.168.10.1:8000/getAll');
})->name("getAll");

route::get('recentlytrips', function () {
    return redirect  ('http://192.168.10.1:8000/getRecentlyTrips');
})->name("getRecentlyTrips");

route::get('currentlytrips', function () {
    return redirect  ('http://192.168.10.1:8000/getCurrentlyTrips');
})->name("getCurrentlyTrips"); 

route::get('upcomingtrips', function () {
    return redirect  ('http://192.168.10.1:8000/getUpcomingTrips');
})->name("getUpcomingTrips");
route::get('cars', function () {
    return redirect  ('http://192.168.10.1:8000/getCars');
})->name("getCars");