<div class="box-header">
<h1><strong><center>Edit Jenis Laundry <i class="fa fa-edit"></i></center></strong></h1>
</div>

<div class="box-body">
<?php
$id_jenis	= $_GET['id'];
if(isset($_POST['submit'])){ 
	$jenis= $_POST['jenis'];
	$harga	= $_POST['harga'];
	
	$sql	= "UPDATE jenis_laundry SET 
				jenis = '$jenis',
     			harga = '$harga'
     			WHERE id_jenis = $id_jenis
     			";
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Jenis laundry berhasil diubah!');
                document.location.href = 'index.php?page=jenis';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal mengubah jenis laundry!');
                document.location.href = 'index.php?page=tmbhj';
            </script>
            ";
	}
}
$kuery = mysqli_query($koneksi,"SELECT * FROM jenis_laundry WHERE id_jenis ='$id_jenis'");
$zep	= mysqli_fetch_array($kuery);
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	      <label>Jenis Laundry <i class="fa fa-list-alt"></i></label>
	      <input type="text" name="jenis" required id="jenis" class="form-control" value="<?= $zep['jenis']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Harga(Rp.) <i class="fa fa-money"></i></label>
	      <input type="number" name="harga" required id="harga" class="form-control" value="<?= $zep['harga']; ?>">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit"></i> Edit Jenis</button>
	    	<a href="index.php?page=jenis" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>