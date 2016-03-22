<?php

namespace Estoque\Http\Controllers;

use Estoque\Http\Requests;
use Auth;
use Request;

class LoginController extends Controller {

    public function login(){
        $login = Request::only('email', 'password');
        if (Auth::attempt($login, true))
            return redirect('/');
        return "Usuário inválido";
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function index(){
        return view('login.entrar');
    }

}
