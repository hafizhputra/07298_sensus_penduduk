<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah data</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css" />

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
</head>

<body>
    <div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading" style="margin-left: 20px;">
                <h3>Tambah Data</h3>
            </div>
            <div class="page-content" style="margin-left: 20px;">
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" >
                                    <h4 class="card-title" style="margin-top: 20px;">Tambah Data</h4>
                                    <div class="col-12 d-flex justify-content-start mt-4 mb-2">
                                        <a href="index.php?page=admin&aksi=view" class="btn btn-success">Kembali</a>
                                    </div>

                                    <form class="form" action="index.php?page=admin&aksi=storeData" method="POST" enctype="multipart/form-data">
                                       
                                        <div class="row" style="margin-top: 50px;">
                                          
                                   
                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">No KK</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input No KK"  name="nokk">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">NIK</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Nik"  name="nik">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Nama"  name="nama">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Tempat/Tanggal Lahir</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Tempat/Tanggal Lahir"  name="tgllahir">
                                                </div>
                                            </div>

                                          
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Jenis Kelamin</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Jenis Kelamin"  name="jeniskelamin">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Alamat</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Alamat"  name="alamat">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">RT/RW</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input RT/RW"  name="rt">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Kelurahan/Kecamatan</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Kelurahan/Kecamatan"  name="kelurahan">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Kota</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Kota"  name="kota">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Provinsi</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Provinsi"  name="provinsi">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Status Keberadaan</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Status Keberadaan"  name="status">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Pendidikan</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Pendidikan"  name="pendidikan">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Agama</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Agama"  name="agama">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Kewarganegaraan</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Kewarganegaraan"  name="kewarganegaraan">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Pekerjaan</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Pekerjaan"  name="pekerjaan">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Status Perkawinan</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Status Perkawinan"  name="perkawinan">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama Ayah</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Nama Ayah"  name="ayah">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama Ibu</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Input Nama Ibu"  name="ibu">
                                                </div>
                                            </div>

                                     

                                            <div class="col-12 d-flex justify-content-end">
                                            <a href="index.php?page=admin&aksi=view" class="font-bold">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" id="btn-simpan">Simpan</button>
                                            </a>
                                               
                                               
                                            </div>


                                        </div>
                                    </form>
                                 
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>