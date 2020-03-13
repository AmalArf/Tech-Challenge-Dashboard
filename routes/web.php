<?php
use App\challenge;
use Illuminate\Support\Facades\Input;
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
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/organizer', 'Auth\LoginController@showOrganizerLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/organizer', 'Auth\RegisterController@showOrganizerRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/organizer', 'Auth\LoginController@organizerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/organizer', 'Auth\RegisterController@createOrganizer');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/checkIfsubmitted/{id_user}/challenge/{id_challenge}', 'HomeController@checkIfsubmitted')->name('checkIfsubmitted');
Route::view('/admin', 'admin');
Route::view('/organizer', 'organizer')->name('organizer');
Route::get('/challengeDetail/{id}', 'ChallengeController@showChallenge')->name('challengeDetail');;
//Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::resource('challenges', 'ChallengeController');
Route::resource('users', 'UserController');
Route::post('/home/submit', 'HomeController@submit')->name('submit');
Route::post('/challenges/updateChallenge', 'ChallengeController@updateChallenge')->name('updateCh');
Route::post('/challenges/closeChallenge/{id}', 'ChallengeController@closeChallenge')->name('closeChallenge');
Route::post('/challenges/setWinner', 'ChallengeController@setWinner')->name('setWinner');

Route::get('/challenges/changeStatus/{id}', 'ChallengeController@changeStatus')->name('changeStatus');


Route::get('/challenges/changeToOrganizer/{id}', 'ChallengeController@changeToOrganizer')->name('changeToOrganizer');



Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $challenges = challenge::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $challenges ) > 0){
        return view ( 'home' )->with('challenges',$challenges)->withQuery ( $q );
    }else{
        return view ( 'home' )->withMessage ( 'No Details found. Try to search again !' );
    }
} );