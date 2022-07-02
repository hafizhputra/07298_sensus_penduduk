<?php 

    class AuthModel{
       
        public function prosesAuth($username,$password)
        {
            $sql = "SELECT * from user where username_user='$username' AND password_user='$password' ";
            $query = koneksi()->query($sql);

            

            return $query->fetch_assoc();
        }

    }