<div class="box-header">
<h1><strong><center>Tambah Konsumen <i class="fa fa-user-plus"></i></center></strong></h1>
</div>

<div class="box-body">
<?php
    if(isset($_POST['submit'])){ 
    	$nama = $_POST['nama'];
    	$alamat	= $_POST['alamat'];
	    $telp	= $_POST['telp'];
    	$sql	= "INSERT INTO konsumen (id_konsumen,nama,alamat,telp) VALUES (NULL,'$nama','$alamat','$telp')";
    	$kweri	= mysqli_query($koneksi,$sql);
    	
    	if($kweri){
		echo "
            <script>
                alert('Konsumen baru berhasil ditambahkan!');
                document.location.href = 'index.php?page=datako';
            </script>
            ";
    	}
    	else{
    		echo "
                <script>
                    alert('Gagal Menambah konsumen!');
                    document.location.href = 'index.php?page=tmbhk';
                </script>
                ";
    	}
    	
    }
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	      <label>Nama Konsumen <i class="fa fa-user"></i></label>
	      <input type="text" name="nama" required id="nama" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Alamat <i class="fa fa-home"></i></label>
	      <input type="text" name="alamat" required id="alamat" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Nomor Telepon <i class="fa fa-phone"></i></label>
	      <input type="text" name="telp" required id="telp" class="form-control" autocomplete="none">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Konsumen</button>
	    	<a href="index.php?page=datako" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>