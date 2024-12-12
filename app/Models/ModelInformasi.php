<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelInformasi extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {   
        $this->db = \Config\Database::connect(); 
        $this->request = \Config\Services::request();
    }

    protected $table      = 'informasi';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id','nama','deskripsi','foto'];


    public function getInformasi()
    {
        return $this->get();
    }
    

    public function searchInformasi($keyword)
{
    return $this->like('nama', $keyword)->get();
}

    
    


    public function insert_informasi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getById($id)
    {
        return $this->where(['id' => $id])->get();
    }





}