<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Factura;

class CarritoController extends Controller
{
	public function index(){

		$factura = new Factura();

		$factura->listaProductos = [
			['nombre' => 'Fresh Strawberries',
			 'precio' => 36.00,
			 'cantidad' => 1,
			 'total' => 36.00],
			 ['nombre' => 'Lightweight Jacket',
			 'precio' => 16.00,
			 'cantidad' => 1,
			 'total' => 16.00]
		];

		$total = 0;
		foreach($factura->listaProductos as $prod){
			$total = $total + $prod['precio'];
		}

		$factura->subtotal = $total;
		$factura->iva = $factura->subtotal * 0.12;
		$factura->totalCompra = $factura->subtotal + $factura->iva;

		$nroProductos = count($factura->listaProductos);


		return view('carrito.carrito', compact('factura', 'nroProductos'));
	}
}
