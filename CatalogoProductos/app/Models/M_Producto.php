<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Producto extends Model{

    protected $table = 'producto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','marca','img','path_img'];

    public function getProducto(){
        return $this->findAll();
    }

}