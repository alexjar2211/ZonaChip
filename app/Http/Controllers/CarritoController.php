<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Factura;
use App\Producto;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
	public function index()
	{
		// session()->forget("nroProductos");
		$factura = new Factura();
		$total = 0;
		$listaProductos = array();
		$nroProductos = 0;
		$descuento = 0;

		if (session('productos') == null) {
			session(['productos' => $listaProductos]);
		} else {
			$listaProductos = session('productos');
		}

		if (count($listaProductos) != 0) {
			foreach ($listaProductos as $prod) {
				$total = $total + ( $prod['precio'] * $prod['cantidad']);
			}

			if (session('descuento') == null) {
				$descuento = 0;
			} else {
				$descuento = session('descuento');
			}

			$factura->subtotal = $total;
			$factura->envio = 15;
			$factura->listaProductos = $listaProductos;
			$factura->descuento = $descuento;
		} else {
			$factura->subtotal = 0;
			$factura->envio = 0;
		}

		$factura->iva = $factura->subtotal * 0.12;
		$factura->total = $factura->subtotal + $factura->iva + $factura->envio;

		if (session('nroProductos') == null) {
			session(['nroProductos' => $nroProductos]);
		} else {
			$nroProductos = session('nroProductos');
		}
		return view('carrito.carrito', compact('factura', 'nroProductos'));
	}

	public function getFactura()
	{
		return json_encode(session('factura'));
	}

	public function addProductCart(Request $request)
	{
		$listaProductos = array();

		// session()->forget("productos");
		// session()->forget("nroProductos");

		if (session('productos') == null) {
			session(['productos' => $listaProductos]);
		} else {
			$listaProductos = session('productos');
		}

		$input = $request->all();

		$producto = new Producto();
		$producto->id = $input['id'];

		$indexProd = $this->verificarProductoExistente($producto->id, $listaProductos);
		if ($indexProd == -1) {
			$producto->nombre = $input['nombre'];
			$producto->precio = $input['precio'];
			$producto->cantidad = $input['cantidad'];

			array_push($listaProductos, $producto);
		} else {
			$cantidadGuardada = $listaProductos[$indexProd]->cantidad;

			if ($cantidadGuardada <= $input['cantidad']) {
				$listaProductos[$indexProd]->cantidad = $listaProductos[$indexProd]->cantidad + 1;
			} else {
				$listaProductos[$indexProd]->cantidad = $listaProductos[$indexProd]->cantidad - 1;
			}
		}

		session(['productos' => $listaProductos]);
		$nroProductos = $this->contarProductos();

		if (isset($input['section'])) {
			$this->subirImagen($input);
			return redirect()->action('CarritoController@index');
		}

		return json_encode($nroProductos);
	}

	private function subirImagen($input)
	{
		$image = $_FILES['img-diseño']['name'];
		$imageArr = explode('.', $image); 
		$newImageName = session('idUsuario') . '_' . $input['id'] . '_' . date('YmdHis') . '.' . $imageArr[1];
		$uploadPath = "../public/wp-content/tmp/" . $newImageName;
		
		$isUploaded = move_uploaded_file($_FILES["img-diseño"]["tmp_name"], $uploadPath);
		if ($isUploaded)
			echo 'successfully file uploaded';
		else
			echo 'something went wrong';
	}

	public function removeProductCart(Request $request)
	{
		$input = $request->all();
		$productId = $input['producId'];
		$listaProductos = array();

		// session()->forget("productos");

		if (session('productos') == null) {
			session(['productos' => $listaProductos]);
		} else {
			$listaProductos = session('productos');
		}

		$indexProduct = $this->verificarProductoExistente($productId, $listaProductos);
		unset($listaProductos[$indexProduct]);
		session(['productos' => $listaProductos]);
		$nroProductos = $this->contarProductos();

		return json_encode($nroProductos);
	}

	private function verificarProductoExistente($id, $listaProductos)
	{
		$indexProd = -1;

		foreach ($listaProductos as $clave => $valor) {
			if ($valor['id'] == $id)
				return $clave;
		}

		return $indexProd;
	}

	private function contarProductos()
	{
		$cantidad = 0;
		$lista = session('productos');

		foreach ($lista as $valor) {
			$cantidad += $valor['cantidad'];
		}

		session(['nroProductos' => $cantidad]);
		return $cantidad;
	}

	public function setCupon(Request $request)
	{
		$input = $request->all();
		$userId = (int)$input['userId'];
		$codigoCupon = (string)$input['codigoCupon'];

		$resultado = DB::select('CALL sp_usar_cupon(?,?)', array($codigoCupon, $userId));

		return json_encode($resultado[0]->LV_ERROR);
	}

	public function registrarCompra()
	{

		$listaProductos = [];
		$factura = new Factura();
		$total = 0;

		if (session('productos') == null) {
			session(['productos' => $listaProductos]);
		} else {
			$listaProductos = session('productos');
		}

		foreach ($listaProductos as $prod) {
			$total = $total + ($prod['precio'] * $prod['cantidad']);
		}

		$factura->subtotal = $total;
		$factura->envio = 15;
		$factura->listaProductos = $listaProductos;
		$factura->iva = $factura->subtotal * 0.12;
		$factura->total = $factura->subtotal + $factura->iva + $factura->envio;

		$idUsuario = session('idUsuario');

		$resultado = DB::select(
			'CALL sp_registrar_venta(?,?,?,?,?,?)',
			array($idUsuario, $factura->subtotal, $factura->descuento, $factura->iva, $factura->total, $factura->envio)
		);

		$idVenta = $resultado[0]->idVenta;

		foreach ($factura->listaProductos as $prod) {
			DB::select(
				'CALL sp_registrar_detalle_venta(?,?,?,?,?)',
				array(
					$idVenta, $prod->id, $prod->cantidad, $prod->precio, $prod->precio * $prod->cantidad
				)
			);
		}

		session()->forget('productos');
		session()->forget('nroProductos');

		return json_encode($idVenta);
	}
}
