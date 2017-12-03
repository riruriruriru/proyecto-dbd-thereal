
<?php
use App\Catastrofe;

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
	$catastrofes = Catastrofe::all();
    return view('welcome', compact('catastrofes'));
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'HomeController@viewPerfil')->name('perfil');
Route::post('update_perfil', 'HomeController@updatePerfil');
Route::post('/verDonaciones', 'HomeController@updateTarjeta')->name('tarjeta.update');
Route::post('/verDonaciones/add/post', 'HomeController@Donar')->name('donante.store');
Route::get('/inscribirseEvento/{id}', 'HomeController@viewInscribirseEvento');
Route::get('/inscribirseVoluntariado/{id}', 'HomeController@viewInscribirseVoluntariado');
Route::get('/agregarHabilidad', 'HomeController@viewAgregarHabilidad');
Route::post('/agregarHabilidad/add/post', 'HomeController@updateHabilidad')->name('habilidad.update');
Route::get('/registroRNV', 'HomeController@viewRegistroRNV');
Route::get('/verSolicitud/{id}', 'HomeController@viewverSolicitud');





Route::get('/agregarActividadEvento/{id}', 'HomeController@viewAgregarActividadEvento');
Route::get('/agregarTrabajoVoluntariado/{id}', 'HomeController@viewAgregarTrabajoVoluntariado');

Route::post('/agregarActividadEvento', 'HomeController@updateEvento')->name('evento.update');
Route::post('/verEvento', 'HomeController@updateEventoFinal')->name('evento.updateFinal');
Route::post('/agregarTrabajoVoluntariado', 'HomeController@updateVoluntariado')->name('voluntariado.update');

Route::post('/verVoluntariado', 'HomeController@updateVoluntariadoFINAL')->name('voluntariadoFINAL.update');

Route::post('/inscribirseEvento', 'HomeController@updateEvento2')->name('evento2.update');
Route::post('/inscribirseVoluntariado', 'HomeController@updateVoluntariado2')->name('voluntariado2.update');

Route::post('/crearUsuarios/add/post', 'HomeController@createUser')->name('usuario.crear');
Route::get('/crearUsuarios', 'HomeController@viewcreateUser');

Route::get('/uwu', function()
{
    return Twitter::getUserTimeline(array('screen_name' => 'onemichile', 'count' => 5, 'format' => 'json'));
});

Route::get('twitterUserTimeLine', 'TwitterController@twitterUserTimeLine');
Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);

Route::get('/verPerfil', 'HomeController@viewVerPerfil')->name('verPerfil');

Route::get('/verDonaciones/{id}', 'HomeController@viewVerDonaciones')->name('verDonaciones');

Route::get('/modificarDonaciones/{id}', 'HomeController@viewModificarDonacion');
Route::get('/verEvento/{id}', 'HomeController@viewverEvento');
Route::get('/verCentroAcopio/{id}', 'HomeController@viewverAcopio');
Route::post('/verCentroAcopio', 'HomeController@updateCentroAcopio')->name('centro.update');

Route::post('/modificarDonaciones', 'HomeController@updateDonacion')->name('donacion.update');

Route::get('/aceptarSolicitudes', 'HomeController@viewSolicitudes');
Route::post('solicitud_RNV', 'HomeController@solicitudRNV')->name('solicitud.update');

Route::post('solicitud_m', 'HomeController@solicitudMedida')->name('solicitudM.update');

Route::post('solicitud_v', 'HomeController@solicitudVoluntariado')->name('solicitudV.update');

Route::post('/aceptarSolicitudes/add/post', 'HomeController@solicitudAcopio')->name('solicitudC.update');

Route::post('solicitud_d', 'HomeController@solicitudDonacion')->name('solicitudD.update');

Route::post('/aceptarSolicitudes', 'HomeController@solicitudEventos')->name('solicitudE.update');


Route::post('borrarEvento', 'HomeController@borrarEvento')->name('borrarEvento');
Route::post('borrarCentroAcopio', 'HomeController@borrarCentroAcopio')->name('borrarCentroAcopio');
Route::post('borrarDonacion', 'HomeController@borrarDonacion')->name('borrarDonacion');
Route::post('borrarVoluntariado', 'HomeController@borrarVoluntariado')->name('borrarVoluntariado');
Route::post('borrarMedida', 'HomeController@borrarMedida')->name('borrarMedida');



Route::get('/centroAcopio/{id}','HomeController@viewAgregarCentroAcopio')->name('centroAcopio');
Route::get('/evento/{id}','HomeController@viewAgregarEvento')->name('evento');
Route::get('/voluntariado/{id}','HomeController@viewAgregarVoluntariado')->name('voluntariado');
Route::get('/verVoluntariado/{id}','HomeController@viewUpdateVoluntariado');

Route::get('/RNV','HomeController@viewRNV')->name('RNV');
Route::get('/donacion/{id}','HomeController@viewAgregarDonacion')->name('donacion');
Route::post('/donacion/add/post', 'HomeController@uploadDonacion')->name('donacion.store');


Route::post('RNV/add/post','HomeController@updateRNV')->name('RNV.store');

Route::get('/verMedida/{id}','HomeController@viewVerMedidasCatastrofe')->name('verMedidaCatastrofe');

Route::get('/contacto', 'HomeController@viewContacto')->name('contacto');

Route::get('/donarAcopio/{id}', 'HomeController@viewDonarAcopio');
Route::post('/donarAcopio', 'HomeController@DonarAcopio')->name('donar.Acopio');


Route::get('/home2','HomeController@viewHome2')->name('home2');

Route::get('/quienessomos', 'HomeController@viewQuienesSomos')->name('quienessomos');

Route::post('upload_medida', 'HomeController@uploadMedida');
Route::post('/medida', 'HomeController@uploadMedida')->name('medida.store');
Route::post('/centroAcopio/add/post', 'HomeController@uploadCentroAcopio')->name('centro.store');
Route::post('/evento/add/post', 'HomeController@uploadEvento')->name('evento.store');
Route::post('/voluntariado/add/post', 'HomeController@uploadVoluntariado')->name('voluntariado.store');

Route::post('/infoCatastrofe', 'HomeController@updateCatastrofe')->name('catastrofe.update');




Route::get('get_id_org', 'HomeController@get_id_org');

Route::get('/prueba', 'HomeController@viewPrueba')->name('prueba');

Route::get('/medida', 'HomeController@viewMedida')->name('medida');
Route::post('/infoMedida', 'HomeController@updateMedida')->name('medida.update');
Route::get('/verMedida', 'HomeController@viewVerMedida')->name('verMedida');
Route::post('verMedida', 'HomeController@viewVerMedida');


Route::get('/medida/{id}', 'HomeController@viewMedida')->name('medida');
Route::get('/medida2', 'HomeController@viewMedida2')->name('medida2');

Route::get('/verCatastrofe', 'HomeController@viewVerCatastrofe')->name('verCatastrofe');
Route::post('update_verCatastrofe', 'HomeController@updateVerCatastrofe');
Route::get('/infoCatastrofe/{id}', 'HomeController@viewinfoCatastrofe')->name('infoCatastrofe');
Route::get('/infoMedida/{id}', 'HomeController@viewinfoMedida')->name('infoMedida');

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