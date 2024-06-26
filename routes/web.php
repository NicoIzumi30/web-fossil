<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('beranda');
Route::get('events/detail-event', function () {return view('detailEvent');})->name('detailEvent');
Route::get('/events', function () {return view('events');})->name('events');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/blog/detail-blog-1', function () {return view('detailBlog1');})->name('detailBlog1');
Route::get('/blog/detail-blog-2', function () {return view('detailBlog2');})->name('detailBlog2');

