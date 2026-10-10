<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/materials', 'materials')->name('materials');
Route::view('/machines', 'machines')->name('machines');
Route::view('/project', 'project')->name('project');
Route::view('/location', 'location')->name('location');
Route::view('/contact', 'contact')->name('contact');

Route::permanentRedirect('/bahan', '/materials');
Route::permanentRedirect('/lokasi', '/location');
