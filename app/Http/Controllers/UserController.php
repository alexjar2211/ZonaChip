<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	private $tabla = "USUARIOS";

	public function index(){
		return view('user.login', compact('usuarios'));
	}

	public function login(){

		$correo = $_POST['correo'];
		$password = $_POST['password'];

		$users = DB::table($this->tabla)->where([
			'correo' => $correo,
			'password' => $password
		])->get();

		if($users->isNotEmpty()){
			return "FUNCIONO EL LOGIN" ;
		}
		else{
			return "NO HAY USUARIO";
		}
	}

	public function registrarse(){
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];

		$id = DB::table($this->tabla)->insert([
			['nombres' => $nombre,
			 'apellidos' => $apellido,
			 'correo' => $correo,
			 'password' => $password]
		]);

		if($id == 0){
			return "ya valio vrg";
		}
		else{
			return "funciono pto";
		}

		return "USUARIO CREDO";
	}
}
