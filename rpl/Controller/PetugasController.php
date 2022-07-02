<?php

class PetugasController
{
    private $model;

    public function __construct()
    {
        $this->model = new PetugasModel();
    }

      public function index()
    {
        $penduduk = $this->model->getPenduduk();
        extract($penduduk);
        require_once("View/petugas/daftar_penduduk.php");
    }


         public function detailData()
    {
        $id = $_GET['id'];
        $data = $this->model->getDataById($id);
        extract($data);
        require_once("View/petugas/detail_data1.php");
    }

   
}
