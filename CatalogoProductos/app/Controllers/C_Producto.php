<?php
namespace App\Controllers;
use App\Models\M_Producto;
use CodeIgniter\controller;

class C_Producto extends Controller{
    //ver CRUD
    public function index(){
        $modelo = new M_Producto();
        $data['producto'] = $modelo->getProducto();
        echo view('templates/header');
        echo view('Productos/lista', $data);
        echo view('templates/footer');
    }

    //CREAR PRODUCTOS
    //vista de crear
    public function VistaCrear(){
        echo view('templates/header');
        echo view('Productos/insertar');
        echo view('templates/footer');
    }

    //guardar el producto
    public function Guardar(){
        $modelo = new M_Producto();
        $img = $this->request->getFile('file');
        $img->move('./public/Imagenes');
        $data =[
            'nombre' => $this->request->getVar('nom'),
            'marca' => $this->request->getVar('marca'),
            'img' => $img->getName(),
            'path_img' => base_url().'/public/Imagenes/'.$img->getName(),
        ];

        $modelo->insert($data);
        return redirect()->to(base_url('productos/listar'));
    }

    //EDITAR PRODUCTOS
    //Mostrar vista Editar
    public function VistarEditar($i = null){
        $modelo = new M_Producto();
        $data['producto'] = $modelo->where('id', $i)->first();
        echo view('templates/header');
        echo view('Productos/edicion', $data);
        echo view('templates/footer');
    }

    //guardar datos editados
    public function GuardarEdit(){
        $modelo = new M_Producto();
        $id = $this->request->getVar('id');
        $imgold = $this->request->getVar('imgold');
        $imgnew = $this->request->getFile('file');
        if ($imgnew == "") {
            
            $data2 = [
                'nombre' => $this->request->getVar('nom'),
                'marca' => $this->request->getVar('marca'),
            ];
            $modelo->update($id, $data2);
            return redirect()->to(base_url('productos/listar'));



        }else {
            $imgnew->move('./public/Imagenes');
            $data1 = [
                'nombre' => $this->request->getVar('nom'),
                'marca' => $this->request->getVar('marca'),
                'img' => $imgnew->getName(),
                'path_img' => base_url().'./public/Imagenes/'.$imgnew->getName(),
            ];
            unlink(FCPATH.'./public/Imagenes/'.$imgold);

            $modelo->update($id, $data1);
            
            return redirect()->to(base_url('productos/listar'));
        }
    }

    public function Borrar($id, $img){
        $modelo = new M_Producto();
        $data['producto'] = $modelo->where('id', $id)->delete();
        unlink(FCPATH.'./public/Imagenes/'.$img);
        return redirect()->to(base_url('productos/listar'));
    }
}