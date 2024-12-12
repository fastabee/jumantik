<?php

namespace App\Controllers;
use App\Models\ModelUser;

class Profile extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new ModelUser();
    }

    public function index()
    {
        if (session()->has('id')) {

            $data = array(
                'data' => $this->UserModel->getById(session('id'))->getRow()
            );

        return view('Profile/index.php', $data);

    } else {
        return redirect()->to(base_url() . 'login');
    }

        
    }
    public function edit(){
        $data  = array (
            'data' => $this->UserModel->getById(session('id'))->getRow()
        );
        return view('Profile/edit', $data);
}

public function update(){

    if (session()->has('id')) {
                

        $id = $this->request->getPost('id');

        $data = $this->request->getPost();
        
      
            
        $id = $this->request->getPost('id');

        $foto = $this->request->getFile('foto');

        $data2 = $this->UserModel->getById($id);
        $newName = '';
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getName();
            $foto->move(ROOTPATH . 'public/foto_profil/');


        } else {
            $newName = @$data2->foto;

        }


        $data['foto'] = $newName;
          


       $result = $this->UserModel->update($id, $data);

       if ($result) {
        session()->setFlashdata('mood', 'Berhasil Update data');
        return redirect()->to(base_url() . 'profile');
    } else {
        return redirect()->to(base_url() . 'edit/profil')->with('error', 'Data Updated Failed');
    }

        } else {
            return redirect()->to(base_url() . 'login');
        }
}


}