<div class="box-header">
  <h3 class="box-title">Data Barang</h3>
  <br><br>
  <a href="index.php?page=tmbhb" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Barang</a>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nama Barang</th>
	      <th>Stok</th>
	      <th>Tanggal Update</th>
	      <th>Aksi</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM barang ORDER BY nama ASC");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= $r["nama"];?></td>
	        <td><?= $r["stok"];?></td>
	        <td><?= TanggalIndo($r["tgl_update"]);?></td>
	        <td>
	          <a href="index.php?page=tmbhs&id=<?= $r['id_barang']; ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Stok</a>
	          <a href="index.php?page=pakeb&id=<?= $r['id_barang']; ?>" class="btn btn-info"><i class="fa fa-check"></i> Pakai</a>
	          <a href="index.php?page=hapb&id=<?= $r['id_barang']; ?>" onclick="return confirm('Hapus Barang ini?');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	        </td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>