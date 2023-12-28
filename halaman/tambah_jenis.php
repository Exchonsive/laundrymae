<div class="box-header">
<h1><strong><center>Tambah Jenis Laundry <i class="fa fa-list-alt"></i></center></strong></h1>
</div>

<div class="box-body">
	<?php
if(isset($_POST['submit'])){ 
	$jenis= $_POST['jenis'];
	$harga	= $_POST['harga'];
	
	$sql	= "INSERT INTO jenis_laundry VALUES (NULL,'$jenis','$harga')";
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Jenis laundry berhasil ditambahkan!');
                document.location.href = 'index.php?page=jenis';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal menambahkan jenis laundry!');
                document.location.href = 'index.php?page=tmbhj';
            </script>
            ";
	}
}
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	      <label>Jenis Laundry <i class="fa fa-list-alt"></i></label>
	      <input type="text" name="jenis" required id="jenis" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Harga(Rp.) <i class="fa fa-money"></i></label>
	      <input type="number" name="harga" required id="harga" class="form-control" autocomplete="none">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Jenis</button>
	    	<a href="index.php?page=jenis" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>