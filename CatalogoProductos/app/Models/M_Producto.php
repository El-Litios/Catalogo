<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Producto extends Model{

    protected $table = 'producto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','marca','img','path_img','id_cat'];

    public function getProducto(){
        //return $this->findAll();
        
        //consultas
        return $this
        ->table('producto')
        ->select('producto.id, producto.nombre, producto.marca, producto.img, categoria.descripcion')
        ->join('categoria','producto.id_cat = categoria.id','INNER')
        ->findAll();
    }

}