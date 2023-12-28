<div class="box-header">
<h1><strong><center>Tambah Pengguna <i class="fa fa-user-plus"></i></center></strong></h1>
</div>

<div class="box-body">
	<?php
if(isset($_POST['submit'])){ 
	$nik= $_POST['nik'];
	$nama = $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$telp	= $_POST['telp'];
	$gender	= $_POST['gender'];
	$username	= $_POST['username'];
	$passwordcuy	= $_POST['password'];
	$passwordmd5= md5($passwordcuy);
	$level = $_POST['level'];

	$sql	= "INSERT INTO pengguna VALUES (NULL,'$nama','$username','$passwordmd5','$level','$nik','$alamat','$telp','$gender')";
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Pengguna baru berhasil ditambahkan!');
                document.location.href = 'index.php?page=krywn';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal menambahkan karyawan baru!');
                document.location.href = 'index.php?page=krywn';
            </script>
            ";
	}
}
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	      <label>NIK <i class="fa fa-user"></i></label>
	      <input type="number" name="nik" required id="nik" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Nama Pengguna <i class="fa fa-user"></i></label>
	      <input type="text" name="nama" required id="nama" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Alamat <i class="fa fa-home"></i></label>
	      <input type="text" name="alamat" required id="alamat" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Telepon <i class="fa fa-phone"></i></label>
	      <input type="number" name="telp" required id="telp" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	        <label>Jenis Kelamin <i class="fa fa-venus-mars"></i></label>
	        <select class="form-control select2" name="gender" required id="gender" style="width: 100%;">
	          <option value="Laki laki">Laki laki</option>
	          <option value="Perempuan">Perempuan</option>
	        </select>
	    </div>
	    <div class="form-group">
	      <label>Username <i class="fa fa-500px"></i></label>
	      <input type="text" name="username" required id="username" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	      <label>Password <i class="fa fa-lock"></i></label>
	      <input type="password" name="password" required id="password" class="form-control" autocomplete="none">
	    </div>
	    <div class="form-group">
	        <label>Type User <i class="fa fa-users"></i></label>
	        <select class="form-control select2" name="level" required id="level" style="width: 100%;">
	          <option value="Administrator">Administrator</option>
	          <option value="Karyawan">Karyawan</option>
	        </select>
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pengguna</button>
	    	<a href="index.php?page=krywn" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>