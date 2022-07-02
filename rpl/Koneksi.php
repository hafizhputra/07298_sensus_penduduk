<?php

/**
 * Function koneksi ini adalah fungsi untuk membuat koneksi ke database
 */

function koneksi()
{
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_database = "sensus_penduduk";

    try {
        return new mysqli($db_host,$db_user,$db_password,$db_database);
    } catch (exception $e) {
        echo "Terjadi kesalahan koneksi database";
    }
}