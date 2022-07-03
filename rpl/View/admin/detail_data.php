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
            <header class="">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

          
            <div class="page-content" style="margin-left: 20px;">
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" >
                            <center>
                                
                                <img src="upload/human.png" style="border-radius: 50px;"  >
                            </center>
                                 

                                    <form class="form" action="index.php?page=admin&aksi=updateData" method="POST" enctype="multipart/form-data">
                                       
                                        <div class="row" style="margin-top: 50px;">
                                          <input type="hidden" name="id" value="<?= $data['id'] ?>">

                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">No KK</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['no_kk'] ?>" name="nokk">
                                                </div>
                                            </div>

                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nik</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['nik'] ?>" name="nik">
                                                </div>
                                            </div>

                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['nama'] ?>" name="nama">
                                                </div>
                                            </div>


                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Tempat/Tanggal Lahir</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['tempat_tgllahir'] ?>" name="tgllahir">
                                                </div>
                                            </div>


                                                 <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Jenis Kelamin</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['jenis_kelamin'] ?>" name="jeniskelamin">
                                                </div>
                                            </div>

                                                 <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Alamat</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['alamat'] ?>" name="alamat">
                                                </div>
                                            </div>


                                                 <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">RT/RW</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['rt_rw'] ?>" name="rt">
                                                </div>
                                            </div>


                                                  <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Kelurahan/Kecamatan</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['kelurahan_kecamatan'] ?>" name="kelurahan">
                                                </div>
                                                </div>


                                                   <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Kota</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['kota'] ?>" name="kota">
                                                </div>
                                                </div>

                                                     <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Provinsi</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['provinsi'] ?>" name="provinsi">
                                                </div>
                                                </div>

                                                     <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Status Keberadaan</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['status_keberadaan'] ?>" name="status">
                                                </div>
                                                </div>


                                                      <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Pendidikan</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['pendidikan'] ?>" name="pendidikan">
                                                </div>
                                                </div>

                                                        <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Agama</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['agama'] ?>" name="agama">
                                                </div>
                                                </div>

                                                         <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Kewarganegaraan</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['kewarganegaraan'] ?>" name="kewarganegaraan">
                                                </div>
                                                </div>


                                                           <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Pekerjaan</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['pekerjaan'] ?>" name="pekerjaan">
                                                </div>
                                                </div>


                                                               <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Status Perkawinan</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['status_perkawinan'] ?>" name="perkawinan">
                                                </div>
                                                </div>

                                                               <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama Ayah</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['nama_ayah'] ?>" name="ayah">
                                                </div>
                                                </div>

                                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama ibu</label>
                                                    <input type="text" id="readonlyInput" readonly="readonly" id="last-name-column" class="form-control" placeholder="Kosong" value="<?= $data['nama_ibu'] ?>" name="ibu">
                                                </div>
                                                </div>

                                                <br>
                                             <div class="col-12 d-flex justify-content-end">
                                               <a href="index.php?page=admin&aksi=view" class="btn btn-success">Kembali</a>
                                             
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






   
 
</body>

</html>