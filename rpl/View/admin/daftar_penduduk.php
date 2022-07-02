<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>login</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!--data table-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">




<!-- <link rel="stylesheet" href="Assets/css/loginuser.css"> -->

</head>




<body>

<div class="container"  style="margin-top:50px;margin-left:50px;margin-right:0px;">
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="berhasil_tambah"){
		
			echo "<div class='alert alert-success' role='alert'>
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;
			 			 </a> Data Berhasil Ditambahkan !
			</div>";	
		}if($_GET['pesan']=="berhasil_ubah"){
		
			echo "<div class='alert alert-warning' role='alert'>
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;
			 			 </a> Data Berhasil Diubah !
			</div>";	
		}
		if($_GET['pesan']=="berhasil_hapus"){
		
			echo "<div class='alert alert-danger' role='alert'>
			 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;
			 			 </a> Data Berhasil Dihapus !
			</div>";	
		}

	}
	?>

</div>



<div class="container" style="margin-left:50px;margin-right:50px;" >
  <!-- Content here -->
  <a href="index.php?page=admin&aksi=tambahData" class="font-bold">
  <button type="button" class="btn btn-success" style="margin-top: 10px; " >Tambah +</button>
  </a>
 

	<br/>
	<br/>

    
		<table  class="table table-striped table-bordered data" id="example" style="width:100%">
			<thead>
				<tr>	
					<th>NO</th>		
					<th>Nik</th>
					<th>Nama</th>
					<th>Tempat/Tgl Lahir</th>
					<th>Jenis Kelamin</th>
          <th>Action</th>
    
				</tr>
			</thead>
			<tbody>
			 <?php foreach ($penduduk as $row) : ?>
                          <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nik'] ?></td>
                            <td><?= $row['nama'] ?></td>
                         		<td><?= $row['tempat_tgllahir'] ?></td>
                           <td><?= $row['jenis_kelamin'] ?></td>
                              <td>
                              <a href="index.php?page=admin&aksi=editData&id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                              <a href="index.php?page=admin&aksi=hapusData&id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
                               <a href="index.php?page=admin&aksi=detailData&id=<?= $row['id'] ?>" class="btn btn-primary">Detail</a>

                            </td>
                          </tr>
                        <?php endforeach; ?>

			</tbody>
		</table>

  </div>
</body>
<script>
	$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</html>

