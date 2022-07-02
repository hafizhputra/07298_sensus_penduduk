<?php 


function kodeData(){
        
        $sql = "SELECT max(id) as id from data_penduduk";
        $query = koneksi()->query($sql);
        $hasil = $query->fetch_array();
        $code = $hasil['id'];
        // $urutan = (int) substr($code,2,3);
        // $urutan++;
        // $huruf = "1";
        // $code = $huruf.sprintf("%03s",$urutan);
        $code++;
        return $code;
    }