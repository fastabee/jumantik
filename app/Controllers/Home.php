<?php

namespace App\Controllers;
use App\Models\ModelUser;

class Home extends BaseController
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

        return view('Dashboard/index.php', $data);

    } else {
        return redirect()->to(base_url() . 'login');
    }
    }
}
