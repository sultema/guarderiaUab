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


/*Route::get('/beneficiarios', 'BeneficiarioController@index');
Route::get('/beneficiarios/create', 'BeneficiarioController@create');
Route::post('/beneficiarios', 'BeneficiarioController@store');
Route::get('/beneficiarios/{Beneficiario}', 'BeneficiarioController@show');
Route::get('/beneficiarios/{Beneficiario}/edit', 'BeneficiariosController@edit');
Route::post('/beneficiarios/{Beneficiario}','BeneficiariosController@update');*/



Route::resource('beneficiarios', 'BeneficiarioController');
Route::resource('educadoras', 'EducadoraController');
Route::resource('grupos', 'GrupoController');
Route::resource('infantes', 'InfanteController');
Route::resource('inscritos', 'InscritoController');
Route::resource('asistencias', 'AsistenciaController');
Route::resource('nutricionales', 'NutricionalesController');
Route::resource('sicologicos', 'SicologicosController');
Route::resource('salud', 'SaludController');
Route::resource('evaluaciones', 'EvaluacionController');

Route::get('/verinfantes', 'KardexController@listarinfantes');
Route::get('/kardex/hce/{id}', 'KardexController@historiaclinica');
Route::get('/kardex/nutricion/{id}', 'KardexController@nutricional');
Route::get('/kardex/sicologico/{id}', 'KardexController@sicologico');
Route::get('/kardex/evaluacion/{id}', 'KardexController@evaluacion');

Route::get('/vereducadoras', 'KardexController@listareducadoras');
Route::get('kardex/grupos/{id}','KardexController@grupos');

Route::get('/generales','EstadisticaController@generales');

Route::get('/usuarios','UsuarioController@listarUsuarios');
Route::get('/asignarrol/{id}', 'UsuarioController@asignarrol');
Route::post('/guardarrol', 'UsuarioController@guardarrol');
Route::get('/quitarrol/{usuario_id}/{rol_id}','UsuarioController@quitarrol');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


