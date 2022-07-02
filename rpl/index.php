<?php

//memanggil helper
require_once "Koneksi.php";
require_once "Model/Kode.php";

//memanggil Model
require_once "Model/AdminModel.php";
require_once "Model/AuthModel.php";
require_once "Model/PetugasModel.php";

// //memanggil Controller
require_once "Controller/AdminController.php";
require_once "Controller/AuthController.php";
require_once "Controller/PetugasController.php";

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthController();

            // -----> login 
        if ($aksi == 'view') {
            $auth->index(); 
            
      
            // -----> User Authentication 
        } else if ($aksi == 'authUser') {
            $auth->auth();
        
            // -----> user logout 
        } else if ($aksi == 'logout') {
            $auth->logout();
    
        } else {
            // require_once "View/menu/error-404.php";
        }
    }
    
    


     else if ($page == "petugas") {
        $petugas = new PetugasController();
         require_once "View/menu/menu_petugas.php";
        if ($_SESSION['role_user'] == 'P' ) {
                // -----> menu petugas
            if ($aksi == 'view') {
                $petugas->index();
           } else if ($aksi == 'detailData') {
                        $petugas->detailData();  
                            
            } else {
                require_once "View/menu/error-404.php";
            }
        } else {
            header("location: index.php?page=auth&aksi=view");
        }
       
        
    }else if ($page == "admin") {
            $admin = new AdminController();
            require_once "View/menu/menu_admin.php";
            if ($_SESSION['role_user'] == 'A' ) {
                // -----> daftar penduduk 
                if ($aksi == 'view') {
                    $admin->index();
                } else if ($aksi == 'tambahData') {
                        $admin->tambahData();
                } else if ($aksi == 'storeData') {
                        $admin->storeData();
                 } else if ($aksi == 'editData') {
                        $admin->editData();
                 } else if ($aksi == 'updateData') {
                        $admin->updateData();
                 } else if ($aksi == 'hapusData') {
                        $admin->deleteData();
                } else if ($aksi == 'detailData') {
                        $admin->detailData();
                    

            
                 }else {
                    require_once "View/menu/error-404.php";
                 }
            } 
            else {
                header("location: index.php?page=auth&aksi=loginadmin");
            }
        }
                
            
        }  else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}

