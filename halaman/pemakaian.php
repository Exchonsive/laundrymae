<div class="box-header">
  <h3 class="box-title">Data Pemakaian Barang</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Tanggal Pemakaian</th>
	      <th>Nama Barang</th>
	      <th>Jumlah Pemakaian</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM pemakaian_barang ORDER BY tgl_pakai DESC");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= TanggalIndo($r["tgl_pakai"]);?></td>
	        <td><?= $r["barang"];?></td>
	        <td><?= $r["jumlah"];?></td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>