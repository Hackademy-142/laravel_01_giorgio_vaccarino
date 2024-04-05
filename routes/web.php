<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function () {
    $arrayStudents = [
        ['name'=>'Felice', 'surname'=>'Mastronzo'],
        ['name'=>'Leon', 'surname'=>'Cino'],
        ['name'=>'Perla', 'surname'=>'Madonna'],
        ['name'=>'Felice', 'surname'=>'Della Sega'],
        ['name'=>'Franco', 'surname'=>'Forte']
    ];
    return view('chi-siamo', ['students'=>$arrayStudents]);
});

Route::get('/i-nostri-valori', function () {
    return view('i-nostri-valori');
});