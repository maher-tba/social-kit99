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




################## Dashboard Route ######################

Route::get('/', 'GraphController@retrieveUserProfile')->middleware('auth');


Route::get('/home', 'GraphController@retrieveUserProfile')->name('home')->middleware('auth');



################## login Route ######################
 Auth::routes();
//Auth::routes(['register' => false]);

############## Error Validation Request ############
Route::get('/errors/403', function () {
    return view('errors.403');
});
############### User Route #########################

Route::resource('users','UsersController')->except([
    'show'
]);

############### start social Route #########################

// Route::get('/home', 'GraphController@retrieveUserPages')->name('home');

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebookProvider');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');

Route::group(['middleware' => [
    'auth'
]], function(){
    Route::get('/user', 'GraphController@retrieveUserProfile');

    Route::get('/pages', 'GraphController@retrieveUserPages');

});
Route::post('/send', 'GraphController@publishToPage')->name('message.send');

//sign up to Facebook to get basic information to register like name, photo and email
Route::get('/redirect/{service}','SocialController@redirect');

Route::get('/callback/facebook','SocialController@callback');


############### end social Route #########################
