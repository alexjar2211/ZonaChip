<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
   public function zonaKid(){
		$nroProductos = $this->obtenerCantidadProductos();

		return view('marcas.zona-kid', compact('nroProductos'));
	}

	public function zonaGym(){
		$nroProductos = $this->obtenerCantidadProductos();

		return view('marcas.zona-gym', compact('nroProductos'));
	}

	public function zonaArmy(){
		$nroProductos = $this->obtenerCantidadProductos();

		return view('marcas.zona-army', compact('nroProductos'));
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
