<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Menu</title>
<!---: boostrap 5 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- <link rel="stylesheet" href="Assets/css/loginuser.css"> -->

<!---: icon bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<!---: SWEETALERT -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</head>



<body >
  

<!---: notifikasi -->
<?php 
    if(isset($_GET['pesan'])){ ?>
    <div class="flash-data" data-flashdata="<?php echo $_GET['pesan']=="berhasil_login";?>"></div>
    <?php } ?>

    <script>
        $('.btn-log').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href') 
            Swal.fire({
             
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
                }).then((result) => {
                    if (result.value) {
                        document.location.href = href;

                    }
                })
         })

         const flashdata = $('.flash-data').data('flashdata')
         if(flashdata){
          
              Swal.fire(
            'Login Berhasil!',
            'silakan klik tombol!',
            'success'
        )
           
         }
    </script>
    <!---: pembatas notifikasi -->



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SENSUS PENDUDUK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <a href="index.php?page=auth&aksi=logout" class='sidebar-link' style="text-decoration: none;color:aliceblue">
    <i class="bi bi-box-arrow-right"></i>
   <span>logout</span>
     </a>


  </div>
</nav>

</body>
</html>