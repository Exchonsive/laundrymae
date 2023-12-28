<div class="box-header">
  <h3 class="box-title">Data Pembelian</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Tanggal Pembelian</th>
	      <th>Nama Supplier</th>
	      <th>Nama Barang</th>
	      <th>Jumlah</th>
	      <th>Total Harga</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM pembelian ORDER BY tgl DESC");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= TanggalIndo($r["tgl"]);?></td>
	        <td><?= $r["supplier"];?></td>
	        <td><?= $r["barang"];?></td>
	        <td><?= $r["totali"];?></td>
	        <td>Rp.<?= $r["totalh"];?></td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>
   <br>
<div class="box-header">
	  <h3 class="box-title"><i class="fa fa-download"></i> Cetak Data Pembelian</h3>
	  <br><br>
	</div>
   <form role="form" method="post" action="index.php?page=ctkbeli">
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
		      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Cetak Pembelian</button>
		    </div>
		</div>
    </div>
   </form>
</div>
