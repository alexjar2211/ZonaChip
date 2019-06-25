<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;

class UserController extends Controller
{
	private $tabla = "USUARIOS";

	public function index()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		return view('user.login', compact('usuarios', 'nroProductos'));
	}

	private function obtenerCantidadProductos()
	{
		$nroProductos = 0;

		if (session('nroProductos') == null) {
			session(['nroProductos' => $nroProductos]);
		} else {
			$nroProductos = session('nroProductos');
		}

		return $nroProductos;
	}

	public function login(Request $request)
	{
		$input = $request->all();

		$correo = $input['correo'];
		$password = $input['password'];

		$users = DB::table($this->tabla)->where([
			'correo' => $correo,
			'password' => $password
		])->get();


		if ($users->isNotEmpty()) {
			session(['idUsuario' => $users[0]->ID_USUARIO]);
			session(['nombreUsuario' => $users[0]->NOMBRES]);
			return redirect('/');
		}

		session(['incorrectUser' => true]);

		return redirect('/login');


		// $usuario = new Usuario();
		// $usuario->nombres = "Maria";
		// $usuario->apellidos = "Mata";
		// $usuario->correo= "maria@123";
		// $usuario->password = "123";

		// $usuario->save();
	}

	public function registrarse()
	{
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];

		$id = DB::table($this->tabla)->insert([
			[
				'nombres' => $nombre,
				'apellidos' => $apellido,
				'correo' => $correo,
				'password' => $password
			]
		]);

		if ($id == 0) {
			return "ya valio vrg";
		} else {
			return "funciono pto";
		}

		return "USUARIO CREDO";
	}
}
