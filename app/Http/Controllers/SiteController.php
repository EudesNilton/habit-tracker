<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public $name = 'Eudes';
    public $habits = ['Ler', 'Estudar', 'Exercitar', 'Meditar', 'Dormir cedo'];

    public function index()
    {
        return view('home', [
            'name' => $this->name,
            'habits' => $this->habits
        ]);
    }
}
