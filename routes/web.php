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
    return view('welcome');
});


Route::get('inserta', function() {
   $repuesto = new \App\Repuesto;
   $repuesto->nombre = 'Disco Embrague Volvo';
   $repuesto->cantidad = 1;
   $repuesto->unidad = 'UN';
   $repuesto->save();
   return 'Registro insertado correctamente. ' . 'Id=> ' . $repuesto->id;

});

Route::get('modifica', function() {
   $repuesto = \App\Repuesto::find(135);
   $repuesto->nombre = 'Disco Embrague Volvo FH12';
   $repuesto->save();
   return 'Registro modificado correctamente. ' . 'Id=> ' . $repuesto->nombre;

});

Route::get('elimina', function() {

    $repuesto = App\Repuesto::find(96);
    $repuesto->delete();

 // App\Repuesto::destroy(3);
 // App\Repuesto::destroy([1, 2, 3]);
 // App\Repuesto::destroy(1, 2, 3)

   return 'Registro Eliminado correctamente. ';

});
