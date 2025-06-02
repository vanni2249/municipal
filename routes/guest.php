<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('guest.welcome');
    })->name('welcome');
    
    Route::get('/services/users', function () {
        return view('guest.services.users');
    })->name('services.users');

    Route::get('/services/merchants', function () {
        return view('guest.services.merchants');
    })->name('services.merchants');

    Route::get('/services/accountants', function () {
        return view('guest.services.accountants');
    })->name('services.accountants');

    Route::get('/announcements', function () {
        return view('guest.announcements.index');
    })->name('announcements.index');
    
    Route::get('/announcements/{announcement}', function () {
        return view('guest.announcements.show');
    })->name('announcements.show');

    Route::get('/news', function () {
        return view('guest.news.index');
    })->name('news.index'); 

    Route::get('/news/{new}', function () {
        return view('guest.news.show');
    })->name('news.show');

    Route::get('/events', function (){
        return view('guest.events.index');
    })->name('events.index');

    Route::get('/events/{event}', function (){
        return view('guest.events.show');
    })->name('events.show');

    Route::get('/agencies', function (){
        return view('guest.agencies.index');
    })->name('agencies.index');

    Route::get('/agencies/{agency}', function ($agency) {
        $viewPath = 'guest.agencies.show.' . $agency;
        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        abort(404);
    })->name('agencies.show');

    Route::get('releases', function (){
        return view('guest.releases.index');
    })->name('releases.index');

    Route::get('releases/{release}', function (){
        return view('guest.releases.show');
    })->name('releases.show');

    Route::get('/facilities', function () {
        return view('guest.facilities.index');
    })->name('facilities.index');

    Route::get('/facilities/{facility}', function ($facility) {
        $viewPath = 'guest.facilities.show.' . $facility;
        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        abort(404);
    })->name('facilities.show');