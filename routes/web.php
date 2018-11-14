<?php
use Illuminate\Http\Request;

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

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@indexAll')->name('home');

Auth::routes();

Route::resource('contracts', 'ContractController');
Route::get('star',function(){
	return view('star');
});
Route::get('assure',function(){
	return view('assure');
});

Route::get('autos/compagnie',function(){
	return view('typeCompagnie');
});
Route::get('rds/compagnie',function(){
	return view('typeCompagnierds'); 
});
Route::get('create/rds/{nom}', 'HomeController@create_rds');
Route::get('create/autos/{nom}', 'HomeController@create_autos');
/*Route::get('auto',function(){
	return view('automobile');
});*/
Route::post('changerEtat/{id}','RdController@changerEtat');
Route::get('contrat','HomeController@indexAssureur');
Route::resources([
    'autos' => 'AutoController',
    'rds' => 'RdController',
    'home' => 'HomeController'
]);
Route::get('/serche','AutoController@serche');

Route::group(['middleware' => 'admin'], function () {
   Route::get('/admin/index',function(){
$users=App\User::all();
	return view('Admin.index',compact('users'));
});

 
});
 Route::get('/admin/create',function(){

	return view('Admin.inscription');
});
Route::post('autos/modif/{id}','AutoController@update');
Route::post('rds/modif/{id}','RdController@update');