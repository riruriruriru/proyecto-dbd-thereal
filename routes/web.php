
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
Route::get('/verPerfil', 'HomeController@viewVerPerfil')->name('verPerfil');

Route::get('/contacto', 'HomeController@viewContacto')->name('contacto');
Route::get('/quienessomos', 'HomeController@viewQuienesSomos')->name('quienessomos');

Route::post('upload_medida', 'HomeController@uploadMedida');
Route::post('/medida', 'HomeController@uploadMedida')->name('medida.store');


Route::get('get_id_org', 'HomeController@get_id_org');

Route::get('/prueba', 'HomeController@viewPrueba')->name('prueba');

Route::get('/medida', 'HomeController@viewMedida')->name('medida');
Route::post('update_medida', 'HomeController@updateMedida');
Route::get('/verMedida', 'HomeController@viewVerMedida')->name('verMedida');
Route::post('verMedida', 'HomeController@viewVerMedida');


Route::get('/medida/{id}', 'HomeController@viewMedida')->name('medida');
Route::get('/medida2', 'HomeController@viewMedida2')->name('medida2');

Route::get('/verCatastrofe', 'HomeController@viewVerCatastrofe')->name('verCatastrofe');
Route::post('update_verCatastrofe', 'HomeController@updateVerCatastrofe');
Route::get('/infoCatastrofe/{id}', 'HomeController@viewinfoCatastrofe')->name('infoCatastrofe');

Route::get('/verOrganizaciones', 'HomeController@viewVerOrganizaciones')->name('verOrganizaciones');

//Route::get('/catastrofes/add', 'CatastrofesController@index')->name('addCatastrofe');
//Route::get('/catastrofes/historial', 'CatastrofesController@historial')->name('historialCatastrofe');
Route::get('/catastrofe','CatastrofeController@index')->name('catastrofe');
Route::post('/catastrofe/add/post', 'CatastrofeController@store')->name('catastrofe.store');
Route::get('/catastrofe', 'HomeController@viewCatastrofe')->name('catastrofe');
Route::post('upload_catastrofe', 'HomeController@uploadCatastrofe');

Route::get('/agregarCatastrofe', 'HomeController@viewagregarCatastrofe')->name('agregarCatastrofe');
Route::post('upload_agregarCatastrofe', 'HomeController@uploadagregarCatastrofe');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');