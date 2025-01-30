<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\DemoLaravel12Ideas::class);
Route::get('/relative-wheres', \App\Http\Controllers\RelativeWhereDemos::class);

Route::get('/login', function () {
   $user = User::factory()->create();

   Auth::login($user, true);

   return redirect('/');
});
