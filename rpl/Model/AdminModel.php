<?php

class AdminModel
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



  public function prosesStoreData($no_kk,$nik,$nama,$tempat_tgllahir,$jenis_kelamin,$alamat,$rt_rw,
          $kelurahan_kecamatan,$kota,$provinsi,$status_keberadaan,$pendidikan,$agama,$kewarganegaraan,
          $pekerjaan,$status_perkawinan,$nama_ayah,$nama_ibu)
  {
          $id = kodeData();
          $sql = "INSERT INTO data_penduduk(id, no_kk, nik, nama, tempat_tgllahir, jenis_kelamin,
          alamat, rt_rw, kelurahan_kecamatan, kota, provinsi, status_keberadaan, pendidikan,
          agama, kewarganegaraan, pekerjaan, status_perkawinan, nama_ayah, nama_ibu)
          Values ('$id','$no_kk','$nik','$nama','$tempat_tgllahir','$jenis_kelamin','$alamat','$rt_rw',
          '$kelurahan_kecamatan','$kota','$provinsi','$status_keberadaan','$pendidikan','$agama','$kewarganegaraan',
          '$pekerjaan','$status_perkawinan','$nama_ayah','$nama_ibu' )";
        
          return koneksi()->query($sql);
  }


   public function ProsesUpdateData( $id,$no_kk,$nik,$nama,$tempat_tgllahir,$jenis_kelamin,$alamat,$rt_rw,
          $kelurahan_kecamatan,$kota,$provinsi,$status_keberadaan,$pendidikan,$agama,$kewarganegaraan,
          $pekerjaan,$status_perkawinan,$nama_ayah,$nama_ibu)
        {
            $sql = "UPDATE data_penduduk SET
             no_kk = '$no_kk', 
             nik = '$nik', 
             nama = '$nama', 
             tempat_tgllahir = '$tempat_tgllahir', 
             jenis_kelamin = '$jenis_kelamin',
             alamat = '$alamat', 
             rt_rw = '$rt_rw', 
             kelurahan_kecamatan = '$kelurahan_kecamatan', 
             kota = '$kota', 
             provinsi = '$provinsi', 
             status_keberadaan = '$status_keberadaan', 
             pendidikan = '$pendidikan',
             agama = '$agama', 
             kewarganegaraan = '$kewarganegaraan', 
             pekerjaan = '$pekerjaan', 
             status_perkawinan = '$status_perkawinan', 
             nama_ayah = '$nama_ayah', 
             nama_ibu = '$nama_ibu'
            Where id = '$id'";
            return koneksi()->query($sql);
        }

         public function prosesDeleteData($id)
        {
                $sql = "DELETE from data_penduduk where id = $id";
                return koneksi()->query($sql);
        }


}