<?php

class PetugasModel
{

  public function getPenduduk()
  {
          $sql = "SELECT *
          from data_penduduk ";
          $query = koneksi()->query($sql);
          $hasil = [];
          while ($data = $query->fetch_assoc()) {
                  $hasil[] = $data;
          }
          return $hasil;
  }


   public function getDataById($id)
        {
                $sql = "SELECT * from data_penduduk
                        Where id = '$id'";
                $query = koneksi()->query($sql);
                return $query->fetch_assoc();
        }



}