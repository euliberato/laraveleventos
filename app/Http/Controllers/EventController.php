<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
        $nome = "Matheus";
        $idade = 29;

        $arr = [10, 20 ,30 ,40 ,50];

        $nomes = ["Matheus","Maria", "João", "Saulo"];

        return view('welcome', 
            [
                'nome' => $nome, 
                'idade' => $idade,
                'profissao' => "Programador",
                'arr' => $arr,
                'nomes' => $nomes
            ]);

    }

    public function create() {
        return view('events.create');
    }

    public function events() {
        return view('events');
    }

    public function signin() {
        return view('signin');
    }

    public function signup() {
        return view('signup');
    }

}
