<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $id;
	protected $nombre;
	protected $precio;
	protected $descripcion;
	protected $cantidad;
}
