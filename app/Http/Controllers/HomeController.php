<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
		return view('home.index');
	}	

	public function contacto(){
		return view('home.contacto');
	}

	public function vestidos(){
		return view('home.vestidos');
	}

	public function marcas(){
		return view('home.marcas');
	}
}
