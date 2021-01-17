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

Route::get('/blog/{post?}/{autor?}', function($post = NULL, $autor = NULL) {
   if(!$post && !$autor) {
      return 'Brak postów';
   }
   elseif(!$autor) {
      return 'Nazwa postu: ' . $post . ' Autor anonimowy';
   }
   return 'Nazwa postu: ' . $post . ' Autor: ' . $autor;
});
