<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ModelInformasi;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class Informasi extends BaseController
{
    protected $InformasiModel;

    public function __construct()
    {
        $this->InformasiModel = new ModelInformasi();
    }

    public function index()
    {
        if (session()->has('id')) {
            $keyword = $this->request->getVar('search'); // Ambil input pencarian
            if ($keyword) {
                $data = [
                    'data' => $this->InformasiModel->searchInformasi($keyword),
                    'search' => $keyword // Kirimkan kembali keyword ke view
                ];
            } else {
                $data = [
                    'data' => $this->InformasiModel->getInformasi(),
                    'search' => '' // Default kosong jika tidak ada pencarian
                ];
            }
    
            return view('Informasi/index.php', $data);
        } else {
            return redirect()->to(base_url() . 'login');
        }
    }

    public function detail($id){

        $data = array (
            'data' => $this->InformasiModel->getById($id)->getRow()
        );

        return view('Informasi/detail', $data);

    }
    

}
