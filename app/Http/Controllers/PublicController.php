<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function chiSiamo() {
        $arrayStudents = [
            ['name'=>'Felice', 'surname'=>'Mastronzo'],
            ['name'=>'Leon', 'surname'=>'Cino'],
            ['name'=>'Perla', 'surname'=>'Madonna'],
            ['name'=>'Felice', 'surname'=>'Della Sega'],
            ['name'=>'Franco', 'surname'=>'Forte']
        ];
        return view('chi-siamo', ['students'=>$arrayStudents]);
    }

    public function valori() {
        return view('i-nostri-valori');
    }
}
