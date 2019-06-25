<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{ 
	public function detalleProducto(){
		$nroProductos = $this->obtenerCantidadProductos();
		return view('product.product-detail', compact('nroProductos'));
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
