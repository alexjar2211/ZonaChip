<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
	protected $listaProductos;
	protected $subtotal;
	protected $iva;
	protected $totalCompra;
}
