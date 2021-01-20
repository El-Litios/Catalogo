<?php namespace App\Controllers;
use App\Models\M_Producto;

class Home extends BaseController
{
	public function index()
	{
		$modelo = new M_Producto();
		$data['producto'] = $modelo->getProducto();
		echo view('templates/header');
		echo view('Productos/catalogo', $data);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
