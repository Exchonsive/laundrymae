<div class="box-header">
<h1><strong><center>Pemakaian Barang</center></strong></h1>
</div>

<div class="box-body">
	<?php
$id_barang = $_GET['id'];
$kueri = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang = '$id_barang'");
$sss = mysqli_fetch_array($kueri);
if(isset($_POST['submit'])){
	$date	= date('Y-m-d'); 
	$barang = $_POST['namab'];
	$stok = $sss['stok'];
	$jumlah = $_POST['jumlah'];
	$total = $stok-$jumlah;

	$kweri1	= mysqli_query($koneksi,"UPDATE barang SET stok=$total,tgl_update='$date' WHERE id_barang='$id_barang'");

	$kweri2	= mysqli_query($koneksi,"INSERT INTO pemakaian_barang VALUES (NULL,'$date','$barang','$jumlah')");
	
	if($kweri1){
		echo "
            <script>
                alert('Barang berhasil dipakai!');
                document.location.href = 'index.php?page=barang';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal memakai barang!');
                document.location.href = 'index.php?page=barang';
            </script>
            ";
	}
}


?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
	    <div class="form-group">
	      <label>Nama Barang <i class="fa fa-reorder"></i></label>
	      <input type="text" name="namab" required id="namab" class="form-control" readonly value="<?= $sss['nama']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Stok tersedia <i class="fa fa-sort-up"></i></label>
	      <input type="text" name="stok" required id="stok" class="form-control" readonly value="<?= $sss['stok']; ?>">
	    </div>
	    <div class="form-group">
	      <label>Gunakan Barang <i class="fa fa-sort-down"></i></label>
	      <input type="number" name="jumlah" required id="jumlah" class="form-control">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-hand-stop-o"></i> Pakai Barang</button>
	    	<a href="index.php?page=barang" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>