<div class="box-header">
<h1><strong><center>Laundry <i class="fa fa-child"></i></center></strong></h1>
</div>

<div class="box-body">
<?php
if(isset($_POST['submit'])){ 
	$nomor	= $_POST['nomor'];
	$konsumen= $_POST['konsumen'];
	$telp	= $_POST['telp'];
	$alamat	= $_POST['alamat'];
	$tgl_transaksi= $tgl_transaksi=date('Y-m-d');
	$tgl_ambil= $_POST['tgl_ambil'];
	$jenis = $_POST['jenis'];
	$kueri = mysqli_query($koneksi,"SELECT * FROM jenis_laundry WHERE jenis = '$jenis'");
	$sss = mysqli_fetch_array($kueri);
	$harga = $sss['harga'];
	$berat = $_POST['berat'];
	if ($berat>=12){
	$tarif = $berat*$harga*90/100;
	$diskon = '10%';
	}else{
	$tarif = $berat*$harga;
	$diskon = "Tidak ada";
	}
	$status = $_POST['status'];
	$usr = $hasil['nama'];
	
	$sql	= 'INSERT INTO transaksi VALUES ("'.$nomor.'","'.$konsumen.'","'.$telp.'","'.$alamat.'","'.$tgl_transaksi.'","'.$tgl_ambil.'","'.$jenis.'","'.$berat.'","'.$tarif.'","'.$diskon.'","'.$status.'","'.$usr.'")';
	$kweri	= mysqli_query($koneksi,$sql);
	
	if($kweri){
		echo "
            <script>
                alert('Laundry berhasil ditambahkan!');
                document.location.href = 'index.php?page=lndry';
            </script>
            ";
	}
	else{
		echo "
            <script>
                alert('Gagal melakukan Laundry!');
                document.location.href = 'index.php?page=lndry';
            </script>
            ";
	}
}
?>
	<form role="form" method="post" action="" style="margin-left:3%; margin-right: 3%;">
	    <div class="form-group">
	      <label>Nomor Laundry <i class="fa fa-500px"></i></label>
	      <?php 
	      	$kueri="SELECT max(kode_transaksi) as maxKode FROM transaksi";
	      	$gabung=mysqli_query($koneksi,$kueri);
	      	$data = mysqli_fetch_array($gabung);
	      	$KodeTransaksi = $data['maxKode'];
	      	$noUrut = (int) substr($KodeTransaksi, 4, 4);
	      	$noUrut++;
	      	$char = "LDR-";
	      	$KodeTransaksi = $char . sprintf("%04s",$noUrut);
	      ?>
	      <input type="text" name="nomor" id="nomor" class="form-control" value="<?= $KodeTransaksi; ?>" readonly required>
	    </div>
	    <div class="form-group">
	        <label>Nama Konsumen <i class="fa fa-user"></i></label>
	        <select name="konsumen" id="konsumen" class="form-control select2" onchange="changeValue(this.value)" style="width: 100%;" required>
          	<?php
				$tp=mysqli_query($koneksi,"SELECT * FROM konsumen");
				$a= "var telp = new Array();\n;";  
                $b= "var alamat = new Array();\n;";
                echo "<option></option>"; 
				while($r=mysqli_fetch_array($tp)){
			?>
	          <option value="<?= $r["nama"];?>"><?= $r["nama"];?></option>
	      <?php 
	      $a .= "telp['" . $r['nama'] . "'] = {telp:'" . addslashes($r['telp'])."'};\n";  
          $b .= "alamat['" . $r['nama'] . "'] = {alamat:'" . addslashes($r['alamat'])."'};\n";  } 
          ?>
	        </select>
	     </div>
        <div class="form-group">
	      <label>Telepon <i class="fa fa-phone"></i></label>
	      <input type="text" name="telp" required id="telp" class="form-control"  readonly>
	    </div>
	    <div class="form-group">
          <label>Alamat <i class="fa fa-home"></i></label>
          <input type="text" name="alamat" required id="alamat" class="form-control" readonly>
        </div>
	    <div class="form-group">
	        <label>Tanggal Ambil:</label>
	        <div class="input-group date">
	          <div class="input-group-addon">
	            <i class="fa fa-calendar"></i>
	          </div>
	          <input type="text" name="tgl_ambil" required class="form-control pull-right" id="datepicker" autocomplete="none">
	        </div>
	        <!-- /.input group -->
	      </div>
        <div class="form-group">
	        <label>Jenis <i class="fa fa-list-alt"></i></label>
	        <select class="form-control select2" required name="jenis" id="jenis" style="width: 100%;">
          	<?php
				$tp=mysqli_query($koneksi,"SELECT * FROM jenis_laundry ORDER BY jenis");
				while($r=mysqli_fetch_array($tp)){
			?>
	          <option value="<?= $r["jenis"];?>"><?= $r["jenis"];?></option>
	      <?php } ?>
	        </select>
	     </div>
	    <div class="form-group">
          <label>Total Berat <strong>(KG)</strong></label>
          <input type="number" name="berat" id="berat" required class="form-control" >
        </div>
	    <div class="form-group">
	        <label>Status Pembayaran <i class="fa fa-money"></i></label>
	        <select class="form-control select2" name="status" required id="status" style="width: 100%;">
	          <option value="BELUM LUNAS">BELUM LUNAS</option>
	          <option value="LUNAS">LUNAS</option>
	        </select>
	    </div>
	    <br>
	    <div class="button" align="right">
	    	<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Laudry</button>
		    <a href="index.php?page=lndry" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
	    </div>
	    <br>
	     <script type="text/javascript">   
	      <?php   
	      echo $a;   
	      echo $b; ?>  
	      function changeValue(id){  
	        document.getElementById('telp').value = telp[id].telp;  
	        document.getElementById('alamat').value = alamat[id].alamat;  
	      };  
	     </script>        
	</form>
</div>
