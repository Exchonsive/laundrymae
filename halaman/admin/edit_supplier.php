<div class="box-header">
<h1><strong><center>Edit Supplier <i class="fa fa-edit"></i></center></strong></h1>
</div>

<div class="box-body">
<?php
$id_supplier	= $_GET['id'];
if(isset($_POST['submit'])){ 
	$nama= $_POST['nama'];
	$alamat= $_POST['alamat'];
	$telp	= $_POST['telp'];
	
	$sql	= "UPDATE supplier SET 
				nama = '$nama',
				alamat = '$alamat',
     			telp = '$telp'
     			WHERE id_supplier = $id_supplier
     			";
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Supplier berhasil diubah!');
                document.location.href = 'index.php?page=spplr';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal mengubah Supplier!');
                document.location.href = 'index.php?page=spplr';
            </script>
            ";
	}
}
$kuery = mysqli_query($koneksi,"SELECT * FROM supplier WHERE id_supplier ='$id_supplier'");
$zep	= mysqli_fetch_array($kuery);
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	      <label>Nama Supplier <i class="fa fa-list-alt"></i></label>
	      <input type="text" name="nama" required id="nama" class="form-control" value="<?= $zep['nama']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Alamat <i class="fa fa-list-alt"></i></label>
	      <input type="text" name="alamat" required id="alamat" class="form-control" value="<?= $zep['alamat']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Telepon <i class="fa fa-money"></i></label>
	      <input type="number" name="telp" required id="telp" class="form-control" value="<?= $zep['telp']; ?>">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit"></i> Edit Supplier</button>
	    	<a href="index.php?page=spplr" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>