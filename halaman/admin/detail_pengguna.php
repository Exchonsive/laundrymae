<?php
$id_pengguna = $_GET['id']; 
$kueri = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'");
$zep = mysqli_fetch_array($kueri);

if(isset($_POST['submit'])){ 
	$passwordcuy	= $_POST['password'];
	$passwordmd5 = md5($passwordcuy);
	
	$sql	= "UPDATE pengguna SET 
     			password = '$passwordmd5'
     			WHERE id_pengguna = $id_pengguna
     			";
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Berhasil mengubah password pengguna!');
                document.location.href = 'index.php?page=krywn';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal mengubah Password Pengguna!');
                document.location.href = 'index.php?page=krywn';
            </script>
            ";
	}
}
 ?>
<div class="box-header">
<h3><strong><center>Detail Pengguna</center></strong></h3>
</div>

<div class="box-body">
	<br>
<form role="form" method="post" action="">
<table class='table table-bordered'>
	<tbody>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">NIK</td>
			<td><?= $zep['nik'] ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Nama Pengguna</td>
			<td><?= $zep['nama'] ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Alamat</td>
			<td><?= $zep['alamat'] ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Telepon</td>
			<td><?= $zep['telp'] ?></td>
		</tr>
		
		<tr> 
			<td width='27%' style="background-color:#828282; color:#ffffff;">Jenis Kelamin</td>
			<td><?= $zep['gender']; ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Username</td>
			<td><?= $zep['username']; ?></td>
		</tr>		
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Password Baru</td>
			<td>
				<input type="text" name="password" required id="password" class="form-control">
			</td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Type User</td>
			<td><?= $zep['level']; ?></td>
		</tr>
	</tbody>
</table>
<br><br>
<div class="button" align="right" >
	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit"></i> Edit Password</button>
	<a href="index.php?page=krywn" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
</div>
</form>
</div>