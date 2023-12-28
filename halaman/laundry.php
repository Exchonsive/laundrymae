<div class="box-header">
  <h3 class="box-title">Data Laundry</h3>
  <br><br>
  <a href="index.php?page=tmbhl" class="btn btn-success"><i class="fa fa-plus"> Laundry</i></a>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nama Konsumen</th>
	      <th>Alamat</th>
	      <th>Jenis Laundry</th>
	      <th>Tanggal Transaksi</th>
	      <th>Tanggal Ambil</th>
	      <th>Aksi</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM transaksi ORDER BY tgl_transaksi DESC");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= $r["nama_konsumen"];?></td>
	        <td><?= $r["alamat"];?></td>
	        <td><?= $r["jenis"];?></td>
	        <td><?= TanggalIndo($r["tgl_transaksi"]);?></td>
	        <td><?= TanggalIndo($r["tgl_ambil"]);?></td>
	        <td>
	          <a href="index.php?page=detl&id=<?= $r['kode_transaksi']; ?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
	          <a href="index.php?page=hapl&id=<?= $r['kode_transaksi']; ?>" onclick="return confirm('Hapus data Laundry ini?');" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></a>
	        </td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>
   <br>
   <div class="box-header">
	  <h3 class="box-title"><i class="fa fa-download"></i> Cetak Data Laundry</h3>
	  <br><br>
	</div>
   <form role="form" method="post" action="index.php?page=ctkpemasukan">
   	<div class="row">
   		<div class="col-sm-4">
		   	<div class="form-group">
		      <label>Input Tanggal Awal</label>
		      <input type="text" name="tanggal1" required autocomplete="off" id="datepicker" >
		    </div>
		</div>
		<div class="col-sm-4">
		    <div class="form-group" >
		      <label>Input Tanggal Akhir</label>
		      <input type="text" name="tanggal2" required autocomplete="off" id="datepicker2" >
		    </div>
		</div>
		<div class="col-sm-4">
		    <div class="form-group" >
		      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Cetak Pemasukan</button>
		    </div>
		</div>
    </div>
   </form>