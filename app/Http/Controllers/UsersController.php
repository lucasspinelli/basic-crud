<?php

namespace App\Http\Controllers;
use App\Models\Usuario as Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
    	$usuarios = Usuario::get;
    	return view('users.list', ['users' => $usuarios]);
    }

}
