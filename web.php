<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function() {
    return view('services');
});

Route::get('/faq', function (){

    $faq = [
        'question' => "Lorem ipsum?",
        'answer' => "Yes, Lorem ipsum!",
    ];
    return view('faq', ['faq' => $faq]);
});
