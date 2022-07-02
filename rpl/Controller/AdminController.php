<?php
class AdminController
{
    private $model;

    public function __construct()
    {
        $this->model = new AdminModel();
    }

    public function index()
    {
        $penduduk = $this->model->getPenduduk();
        extract($penduduk);
        require_once("View/admin/daftar_penduduk.php");
    }

   
    public function tambahData()
    {
        require_once("View/admin/tambah_penduduk.php");
    }


 

    public function storeData()
    {
        $id = $_POST['id'];
        $no_kk = $_POST['nokk'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempat_tgllahir = $_POST['tgllahir'];
        $jenis_kelamin = $_POST['jeniskelamin'];
        $alamat = $_POST['alamat'];
        $rt_rw = $_POST['rt'];
        $kelurahan_kecamatan = $_POST['kelurahan'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $status_keberadaan = $_POST['status'];
        $pendidikan = $_POST['pendidikan'];
        $agama = $_POST['agama'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_perkawinan = $_POST['perkawinan'];
        $nama_ayah = $_POST['ayah'];
        $nama_ibu = $_POST['ibu'];
       
      
        if ($this->model->prosesStoreData($no_kk,$nik,$nama,$tempat_tgllahir,$jenis_kelamin,$alamat,$rt_rw,
        $kelurahan_kecamatan,$kota,$provinsi,$status_keberadaan,$pendidikan,$agama,$kewarganegaraan,
        $pekerjaan,$status_perkawinan,$nama_ayah,$nama_ibu)) {
            header("location: index.php?page=admin&aksi=view&pesan=berhasil_tambah");
        } else {
            header("location: index.php?page=admin&aksi=tambahData&pesan=gagal daftar");
        }
    }


      public function editData()
    {
        $id = $_GET['id'];
        $data = $this->model->getDataById($id);
        extract($data);
        require_once("View/admin/edit_penduduk.php");
    }


  public function updateData()
    {
        $id = $_POST['id'];
        $no_kk = $_POST['nokk'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempat_tgllahir = $_POST['tgllahir'];
        $jenis_kelamin = $_POST['jeniskelamin'];
        $alamat = $_POST['alamat'];
        $rt_rw = $_POST['rt'];
        $kelurahan_kecamatan = $_POST['kelurahan'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $status_keberadaan = $_POST['status'];
        $pendidikan = $_POST['pendidikan'];
        $agama = $_POST['agama'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_perkawinan = $_POST['perkawinan'];
        $nama_ayah = $_POST['ayah'];
        $nama_ibu = $_POST['ibu'];
       
        if ($this->model->ProsesUpdateData($id,$no_kk,$nik,$nama,$tempat_tgllahir,$jenis_kelamin,$alamat,$rt_rw,
        $kelurahan_kecamatan,$kota,$provinsi,$status_keberadaan,$pendidikan,$agama,$kewarganegaraan,
        $pekerjaan,$status_perkawinan,$nama_ayah,$nama_ibu)) {
            header("location: index.php?page=admin&aksi=view&pesan=berhasil_ubah");
        } else {
            header("location: index.php?page=admin&aksi=editData&pesan=Gagal Ubah Data");
        }
    }
    

 public function deleteData()
    {
        $id = $_GET['id'];
        if ($this->model->prosesDeleteData($id)) {
            header("location: index.php?page=admin&aksi=view&pesan=berhasil_hapus");
        } else {
            header("location: index.php?page=admin&aksi=daftarProduk&pesan=Gagal hapus kategori");
        }
    }
 

      public function detailData()
    {
        $id = $_GET['id'];
        $data = $this->model->getDataById($id);
        extract($data);
        require_once("View/admin/detail_data.php");
    }



}
