<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Pages principales
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('accueil');
});


Route::view('/login', 'pageConnexion')->name('login');
Route::post('/login', function (Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        if (auth::user()->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/home');
    }

    return back()->withErrors([
        'email' => 'Email ou mot de passe incorrect'
    ]);
});
Route::get ('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');
