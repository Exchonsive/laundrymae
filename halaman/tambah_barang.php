<div class="box-header">
<h1><strong><center>Tambah Barang <i class="fa fa-plus"></i></center></strong></h1>
</div>

<div class="box-body">
	<?php
if(isset($_POST['submit'])){
	$date	= date('Y-m-d'); 
	$supplier = $_POST['namas'];
	$barang = $_POST['namab'];
	$harga = $_POST['harga'];
	$stok = $_POST['jumlah'];
	$hargaa = $harga*$stok;
	$jumlah = $sss['stok'];
	$jumlah2 = $jumlah+$stok;

	$kweri1	= mysqli_query($koneksi,"INSERT INTO barang VALUES (NULL,'$barang','$stok','$date','$supplier','$harga')");
   
	$kweri2	= mysqli_query($koneksi,"INSERT INTO pembelian VALUES (NULL,'$date','$stok','$supplier','$barang','$hargaa')");
	
	if($kweri1){
		echo "
            <script>
                alert('Barang berhasil ditambahkan!');
                document.location.href = 'index.php?page=barang';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal menambahkan Barang!');
                document.location.href = 'index.php?page=barang';
            </script>
            ";
	}
}


?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
		<div class="form-group">
	        <label>Nama Supplier <i class="fa fa-user"></i></label>
	        <select class="form-control select2" required name="namas" id="namas" style="width: 100%;">
          	<?php
				$tp=mysqli_query($koneksi,"SELECT * FROM supplier ORDER BY nama");
				while($r=mysqli_fetch_array($tp)){
			?>
	          <option value="<?= $r["nama"];?>"><?= $r["nama"];?></option>
	      <?php } ?>
	        </select>
	     </div>
	    <div class="form-group">
	      <label>Nama Barang <i class="fa fa-reorder"></i></label>
	      <input type="text" name="namab" required id="namab" class="form-control">
	    </div>
	    <div class="form-group">
	      <label>Harga Barang(Rp.) <i class="fa fa-money"></i></label>
	      <input type="number" name="harga" required id="harga" class="form-control" >
	    </div>
	    <div class="form-group">
	      <label>Jumlah Barang <i class="fa fa-sort-up"></i></label>
	      <input type="number" name="jumlah" required id="jumlah" class="form-control">
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Barang</button>
	    	<a href="index.php?page=barang" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>	
	</form>
</div>