<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        if(Auth::user()) {
            return view('user.dashboard');
        } else {
            return view('user.login');
        }
    }

    public function auth(Request $request){

        $data =[
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        try {
            if(Auth::attempt($data, false)) {
                return redirect()->route('user.dashboard');
            } else {
                return redirect()->back()->with('error', 'E-mail ou senha inválidos');
            }

        }catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function welcome() {
        return view('welcome', ['title'=> 'Bem-vindo']);
    }
}
