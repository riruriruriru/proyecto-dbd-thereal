
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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'HomeController@viewPerfil')->name('perfil');
Route::post('update_perfil', 'HomeController@updatePerfil');

Route::get('/medida', 'HomeController@viewMedida')->name('medida');
Route::post('update_medida', 'HomeController@updateMedida');

Route::get('/verCatastrofe', 'HomeController@viewVerCatastrofe')->name('verCatastrofe');
Route::post('update_verCatastrofe', 'HomeController@updateVerCatastrofe');

//Route::get('/catastrofes/add', 'CatastrofesController@index')->name('addCatastrofe');
//Route::get('/catastrofes/historial', 'CatastrofesController@historial')->name('historialCatastrofe');
Route::get('/catastrofe/get/{$id}','CatastrofeController@get')->name('getCatastrofe');
Route::get('/catastrofe','CatastrofeController@index')->name('catastrofe');
Route::post('/catastrofe/add/post', 'CatastrofeController@store')->name('catastrofe.store');
Route::get('/catastrofe', 'HomeController@viewCatastrofe')->name('catastrofe');
Route::post('upload_catastrofe', 'HomeController@uploadCatastrofe');

Route::get('/agregarCatastrofe', 'HomeController@viewagregarCatastrofe')->name('agregarCatastrofe');
Route::post('upload_agregarCatastrofe', 'HomeController@uploadagregarCatastrofe');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');