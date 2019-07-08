<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{

	private $listaZonaArmy = array();
	private $listaZonaKid = array();
	private $listaZonaGym = array();

	public function __construct()
	{
		array_push($this->listaZonaArmy, array('id' => 101,'nombre' => 'Producto 1 Army','descripcion' => 'asdnasdasd','precio' => 10,'portada' => 'item-02.jpg'));
		array_push($this->listaZonaArmy, array('id' => 102,'nombre' => 'Producto 2 Army','descripcion' => 'asdnasdasd','precio' => 20,'portada' => 'item-03.jpg'));
		
		array_push($this->listaZonaKid, array('id' => 201,'nombre' => 'Producto 1 Kid','descripcion' => 'asdnasdasd','precio' => 10,'portada' => 'item-02.jpg'));
		array_push($this->listaZonaKid, array('id' => 202,'nombre' => 'Producto 2 Kid','descripcion' => 'asdnasdasd','precio' => 20,'portada' => 'item-03.jpg'));
		
		array_push($this->listaZonaGym, array('id' => 301,'nombre' => 'Producto 1 Gym','descripcion' => 'asdnasdasd','precio' => 10,'portada' => 'item-02.jpg'));
		array_push($this->listaZonaGym, array('id' => 303,'nombre' => 'Producto 2 Gym','descripcion' => 'asdnasdasd','precio' => 20,'portada' => 'item-03.jpg'));
	}

	public function zonaKid()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		$listaProductos = $this->listaZonaKid;
		return view('marcas.zona', compact('nroProductos','listaProductos'));
	}

	public function zonaGym()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		$listaProductos = $this->listaZonaGym;
		return view('marcas.zona', compact('nroProductos', 'listaProductos'));
	}

	public function zonaArmy()
	{
		$nroProductos = $this->obtenerCantidadProductos();
		$listaProductos = $this->listaZonaArmy;
		return view('marcas.zona', compact('nroProductos','listaProductos'));
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
