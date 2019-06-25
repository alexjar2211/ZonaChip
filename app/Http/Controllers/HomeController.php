<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
	public function index(){
		$nroProductos = $this->obtenerCantidadProductos();
		return view('home.index', compact('nroProductos'));
	}	
	
	public function contacto(){
		session()->forget('nombreUsuario');
		session()->forget('idUsuario');
		$nroProductos = $this->obtenerCantidadProductos();
		return view('home.contacto', compact('nroProductos'));
	}

	private function obtenerCantidadProductos(){
		$nroProductos = 0;

		if(session('nroProductos') == null){
			session(['nroProductos' => $nroProductos]);
		}
		else{
			$nroProductos = session('nroProductos');
		}

		return $nroProductos;
	}
}
