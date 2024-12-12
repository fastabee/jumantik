<?php

namespace App\Controllers;
use App\Models\ModelUser;
use App\Models\ModelSurvey;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require_once ROOTPATH . '/vendor/autoload.php';

class Survey extends BaseController
{
    protected $UserModel;
    protected $SurveyModel;

    public function __construct()
    {
        $this->UserModel = new ModelUser();
        $this->SurveyModel = new ModelSurvey();
    }

    public function input(): string
    {
        if (session()->has('id')) {
        $data = array(
            'data' => $this->UserModel->getById(session('id'))->getRow()
        );
        return view('Survey/input.php', $data);
    } else {
        return redirect()->to(base_url() . 'login');
    }
    }


    public function insert() {



        $foto = $this->request->getFile('dokumentasi');
        $bak_mandi = $this->request->getPost('bak_mandi');
        $vas_bunga = $this->request->getPost('vas_bunga');
        $aquarium = $this->request->getPost('aquarium');
        $perangkap_semut = $this->request->getPost('perangkap_semut');
        $dispenser = $this->request->getPost('dispenser');
        $kolam_ikan = $this->request->getPost('kolam_ikan');
        $drum = $this->request->getPost('drum');
        $ban_bekas = $this->request->getPost('ban_bekas');
        $pembuangan_kulkas = $this->request->getPost('pembuangan_kulkas');
        $kolam_renang = $this->request->getPost('kolam_renang');
        $kaleng_bekas = $this->request->getPost('kaleng_bekas');
        $pagar = $this->request->getPost('pagar');
        $pelepah_pisang = $this->request->getPost('pelepah_pisang');
        $meteran_air = $this->request->getPost('meteran_air');
        $talang_air = $this->request->getPost('talang_air');
        $reservisor = $this->request->getPost('reservisor');
        $tempat_wudhu = $this->request->getPost('tempat_wudhu');
        $botol_air = $this->request->getPost('botol_air');
        $tampungan_ac = $this->request->getPost('tampungan_ac');
        $minum_burung = $this->request->getPost('bak_mandi');
        
        $status = $bak_mandi + $vas_bunga + $aquarium + $perangkap_semut + 
        $dispenser + $kolam_ikan + $drum + $ban_bekas + $pembuangan_kulkas + 
        $kolam_renang + $kaleng_bekas + $pagar + $pelepah_pisang + $meteran_air + 
        $talang_air + $reservisor + $tempat_wudhu + $botol_air + $tampungan_ac + $minum_burung ;



        $newName = '';
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getName();
            $foto->move(ROOTPATH . 'public/dokumentasi/');
        }

        $data = array(
            'id_user' => $this->request->getPost('id_user'),
            'nama_kk' => $this->request->getPost('nama_kk'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal' => $this->request->getPost('tanggal'), 
            'nama_petugas' => $this->request->getPost('nama_petugas'),
            'bak_mandi' => $bak_mandi,
            'vas_bunga' => $vas_bunga,
            'aquarium' => $aquarium,
            'perangkap_semut' => $perangkap_semut,
            'dispenser' => $dispenser,
            'kolam_ikan' => $kolam_ikan,
            'drum' => $drum,
            'ban_bekas' => $ban_bekas,
            'pembuangan_kulkas' => $pembuangan_kulkas,
            'kolam_renang' => $kolam_renang,
            'kaleng_bekas' => $kaleng_bekas,
            'pagar' => $pagar,
            'pelepah_pisang' => $pelepah_pisang,
            'meteran_air' => $meteran_air,
            'talang_air' => $talang_air,
            'reservisor' => $reservisor,
            'tempat_wudhu' => $tempat_wudhu,
            'botol_air' => $botol_air,
            'tampungan_ac' => $tampungan_ac,
            'minum_burung' => $minum_burung,
            'status' => $status,
            'foto' => $newName,
            'jumlah' => $this->request->getPost('jumlah')
        );
        if ($this->SurveyModel->insert($data)) {
            session()->setFlashdata('success', 'Berhasil Menambahkan Data');
            return redirect()->to(base_url() . 'riwayat');
        } else {
            session()->setFlashdata('error', 'Gagal Menambahkan Data');
            return redirect()->to(base_url() . 'survey/input');
        }
    }

    public function riwayat(){

        $data = array(
            'data' => $this->SurveyModel->getByUserId(session('id'))
        );
        return view('Survey/riwayat.php', $data);

    }

    //semua survey
    public function cetak()
{
    $data = $this->SurveyModel->getByUserId(session('id'))->getResult();

    $spreadsheet = new Spreadsheet();
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama KK')
        ->setCellValue('B1', 'Tanggal')
        ->setCellValue('C1', 'Alamat')
        ->setCellValue('D1', 'Status');

    $column = 2;

    foreach ($data as $row) {
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A' . $column, $row->nama_kk)
            ->setCellValue('B' . $column, $row->tanggal)
            ->setCellValue('C' . $column, $row->alamat)
            ->setCellValue('D' . $column, $row->status);

        $column++;
    }

    $writer = new Xlsx($spreadsheet);
    $filename = date('Y-m-d-His') . '-Data-User';

    // Bersihkan buffer output sebelumnya
    if (ob_get_length()) {
        ob_end_clean();
    }

    // Header untuk download file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
    header('Cache-Control: max-age=0');

    // Simpan dan output file
    $writer->save('php://output');
    exit; 
}


    //detail
    public function detail($id){

        $data = array(
            'data' => $this->SurveyModel->getById($id)->getRow(),
        );

        return View('Survey/detail.php', $data);

    }


    public function cetak_detail(){
        
        $filename = 'Survey';

        $id = $this->request->getPost('id');

        $data = array(
            'data' => $this->SurveyModel->getById($id)->getRow()
        );
 
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Survey/cetak_detail', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // render html as PDF
        $dompdf->render();

        $dompdf->stream($filename); 
    }


    public function cetak_detail2()
    {
        $id = $this->request->getGet('id'); // Ambil ID dari URL parameter
        if (!$id) {
            return redirect()->to('/'); // Redirect jika tidak ada ID
        }

        $filename = 'Survey_' . $id . '.pdf';

        $data = array(
            'data' => $this->SurveyModel->getById($id)->getRow()
        );

        $dompdf = new Dompdf();

        // Load HTML content
        $dompdf->loadHtml(view('Survey/cetak_detail', $data));

        // Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render HTML as PDF
        $dompdf->render();

        // Output file sebagai unduhan
        $dompdf->stream($filename, ['Attachment' => true]);
    }


    public function report(){

        $data = array(
            'data' => $this->UserModel->getById(session('id'))
        );
        return View('Report/index.php', $data);
    }


    public function grafik2(){

       $survey_data = $this->SurveyModel->getSurveyByMonth(session('id'),4);

        $months = [];
        $totals = [];

        for ($i = 3; $i >= 0; $i--) {
            $months[] = date('Y-m', strtotime("-$i month"));
        }

        foreach ($months as $month) {
            // Cek jika data ada untuk bulan tersebut
            $found = false;
            foreach ($survey_data as $data) {
                if ($data->month == $month) {
                    $totals[] = (int) $data->total_jumlah;
                    $found = true;
                    break;
                }
            }
            // Jika data tidak ditemukan untuk bulan tersebut, tambahkan 0
            if (!$found) {
                $totals[] = 0;
            }
        }

       $data = array(
        'months' => $months,
        'totals' => $totals
       );



        return view('Survey/grafik2', $data);
    }

    public function grafik($id){
        

        $survey_data = $this->SurveyModel->getSurveyByMonth($id,4);
 
         $months = [];
         $totals = [];
 
         for ($i = 3; $i >= 0; $i--) {
             $months[] = date('Y-m', strtotime("-$i month"));
         }
 
         foreach ($months as $month) {
             // Cek jika data ada untuk bulan tersebut
             $found = false;
             foreach ($survey_data as $data) {
                 if ($data->month == $month) {
                     $totals[] = (int) $data->total_jumlah;
                     $found = true;
                     break;
                 }
             }
             // Jika data tidak ditemukan untuk bulan tersebut, tambahkan 0
             if (!$found) {
                 $totals[] = 0;
             }
         }
 
        $data = array(
         'months' => $months,
         'totals' => $totals
        );

        $pengguna = array(
            'pengguna' => $this->UserModel->getById(session('id'))
        );
 
 
 
         return view('Survey/grafik', $data, $pengguna);
     }

    
}
