<?php

class AuthController
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }

      // -----> login 
      public function index()
      {
          require_once("View/auth/login.php");
      }


      public function auth()
      {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $data = $this->model->prosesAuth($username, $password);
          if ($data['role_user'] == "A") {

            $_SESSION['username_user'] = $username;
            $_SESSION['role_user'] = 'A';
            $_SESSION['A'] = $data;
           
              header("location: index.php?page=admin&aksi=view&pesan=berhasil_login");

          }else if($data['role_user'] =="P"){
            $_SESSION['username_user'] = $username;
            $_SESSION['role_user'] = 'P';
            $_SESSION['A'] = $data;
            header("location: index.php?page=petugas&aksi=view&pesan=berhasil_login");
        

          } else {
              header("location: index.php?page=auth&aksi=view&pesan=gagal");
          }
      }


        // -----> logout 
        public function logout()
        {
            session_destroy();
            header("location: index.php?page=auth&aksi=view&pesan=berhasil_logout!!");
        }

  }