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

// metoda get - służy do pobierania danych z serwera i zwrócenia ich użytkownikowi. Po stronie serwera nic nie powinno się zmieniać / tworzyć obiekty - pobiera tylko zakres danych
// metoda post - po stronie serwisu tworzy się nowy obiekt, np. zapis
// metoda put - służy do zaaktualizowania obiektu
// metoda patch - służy do zaaktualizowania tylko danego pola danego obiektu, np. użytkownik dodał jakąś notatkę za pomocą post, ta notatka posiada pole tekst, za pomocą tej metody powinniśmy zaaktualizować ten tekst
// metoda delete - służy do usuwania obiektu z systemu
// metoda options - zwraca opcje powiązane z danym urlem

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', 'HelloController@hello');

// Route::get('/example', function() {
//     return 'Metoda GET';
// });

$uri = '/example';

Route::get('/example', function() {
    return 'Metoda GET';
});

Route::post('/example', function() {
    return 'Metoda POST';
});

Route::put('/example', function() {
    return 'Metoda PUT';
});

Route::patch('/example', function() {
    return 'Metoda PATCH';
});

Route::delete('/example', function() {
    return 'Metoda DELETE';
});

Route::options('/example', function() {
    return 'Metoda OPTIONS';
});

Route::match(['get', 'post'], '/match', function(){
    return 'Metoda GET i POST jednocześnie';
});

Route::any('/all', function(){
    return 'Wszystkie metody';
});


Route::view('view/route', 'route.view');

/*
/ Route - obsługa parametrów
*/

Route::get('posts/{postId}/{title}', function($postId, $title) {
    var_dump($postId);
    var_dump($title);
});

// Route::get('users/{nick?}', function(string $nick = null) {
Route::get('users/{nick?}', function(string $nick = null) {
    dd($nick);
});
