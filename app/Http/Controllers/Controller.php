<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage() {

        $variavel = 'Gestão Financeira';
        return view('welcome', ['title' => $variavel]);
    }

    public function cadastrar() {
        return 'tela de cadastro';
    }

    //metodo user login view
    public function fazerLogin() {
        return view('user.login');
        //echo 'tela de login';
    }
}
