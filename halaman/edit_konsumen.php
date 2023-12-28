<div class="box-header">
<h2><strong><center>Edit data Konsumen <i class="fa fa-edit"></i></center></strong></h2>
</div>

<div class="box-body">
<?php
$id_konsumen	= $_GET['id'];
if(isset($_POST['submit'])){ 
	$nama= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$telp	= $_POST['telp'];
	
	$sql	= "UPDATE konsumen SET 
				nama = '$nama',
				alamat = '$alamat',
     			telp = '$telp'
     			WHERE id_konsumen = $id_konsumen
     			";
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Konsumen berhasil diubah!');
                document.location.href = 'index.php?page=datako';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal mengubah Konsumen!');
                document.location.href = 'index.php?page=datako';
            </script>
            ";
	}
}
$kuery = mysqli_query($koneksi,"SELECT * FROM konsumen WHERE id_konsumen ='$id_konsumen'");
$zep	= mysqli_fetch_array($kuery);
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	      <label>Nama Konsumen <i class="fa fa-user"></i></label>
	      <input type="text" name="nama" required id="nama" class="form-control" value="<?= $zep['nama']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Alamat <i class="fa fa-home"></i></label>
	      <input type="text" name="alamat" required id="alamat" class="form-control" value="<?= $zep['alamat']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Telepon <i class="fa fa-phone"></i></label>
	      <input type="number" name="telp" required id="telp" class="form-control" value="<?= $zep['telp']; ?>">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit"></i> Edit Konsumen</button>
	    	<a href="index.php?page=datako" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>