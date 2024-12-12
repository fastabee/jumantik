<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelUser extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {   
        $this->db = \Config\Database::connect(); 
        $this->request = \Config\Services::request();
    }

    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id','nama','password','jabatan', 'nomor_telepon', 'foto'];


    public function getUser()
    {
        return $this->get();
    }

    public function cekNomor($nomor)
    {
        return $this->where('nomor_telepon', $nomor)
            ->get(); 
    }


    public function insert_user($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getById($id)
    {
        return $this->where(['id' => $id])->get();
    }





}