<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Categoria extends Model{

    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['descripcion'];

    public function getCategoria(){
        return $this->findAll();
    }

}