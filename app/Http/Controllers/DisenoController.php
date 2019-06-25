<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisenoController extends Controller
{
	public function vestidos()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		$tipo = "vestido";

		$urlPlantillas = [
			'vestidos' => [
				'kid' => 'wp-content/tallas/dressKid_all_sizes.pdf',
				'women' => 'wp-content/tallas/dressWomen_Size_L.pdf'
			]
		];

		return view('diseño.index', compact('nroProductos', 'tipo', 'urlPlantillas'));
	}

	public function camisetas()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		$tipo = "camiseta";

		$urlPlantillas = [
			'camisetas' => [
				'kid' => 'wp-content/tallas/shirtKid_all_sizes.pdf',
				'men' => 'wp-content/tallas/shirtMen_all_sizes.pdf',
				'women' => 'wp-content/tallas/shirtWomen_all_sizes.pdf',
			]
		];

		return view('diseño.index', compact('nroProductos', 'tipo', 'urlPlantillas'));
	}
	
	public function subirFoto()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		return view('diseño.subir-foto', compact('nroProductos'));
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
}
