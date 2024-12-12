<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelSurvey extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }

    protected $table      = 'survey';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id',
        'id_user',
        'nama_kk',
        'alamat',
        'nama_petugas',
        'tanggal',
        'bak_mandi',
        'vas_bunga',
        'aquarium',
        'perangkap_semut',
        'dispenser',
        'kolam_ikan',
        'drum',
        'ban_bekas',
        'pembuangan_kulkas',
        'kolam_renang',
        'kaleng_bekas',
        'pagar',
        'pelepah_pisang',
        'meteran_air',
        'talang_air',
        'reservisor',
        'tempat_wudhu',
        'botol_air',
        'tampungan_ac',
        'minum_burung',
        'foto',
        'status',
        'jumlah'
    ];


    public function getSurvey()
    {
        return $this->get();
    }

    public function getByUserId($id_user)
{
    return $this->where('id_user', $id_user)->get();
}


    public function insert_survey($data)
    {
        return $this->db->table($this->table)->insert($data);
    }


    public function getSurveyByMonth($id_user, $months = 4)
{
    $currentMonth = date('Y-m'); // Bulan ini (tahun-bulan)
    $query = $this->db->table($this->table)
        ->select('SUM(jumlah) as total_jumlah, DATE_FORMAT(tanggal, "%Y-%m") as month')
        ->where('id_user', $id_user)
        ->where('tanggal >=', date('Y-m-d', strtotime("-$months months")))
        ->groupBy('month')
        ->orderBy('month', 'ASC')  // Atur urutan bulan dari yang lebih lama
        ->get();
    return $query->getResult();
}


    public function getById($id)
    {
        return $this->where(['id' => $id])->get();
    }
}
