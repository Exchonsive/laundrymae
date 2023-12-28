<div class="box-header">
  <h3 class="box-title">Jenis Laundry</h3>
  <br><br>
  <a href="index.php?page=tmbhj" class="btn btn-success"><i class="fa fa-plus"> Tambah Jenis Laundry</i></a>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Jenis Laundry</th>
	      <th>Harga</th>
	      <th>Aksi</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM jenis_laundry");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= $r["jenis"];?></td>
	        <td>Rp.<?= $r["harga"];?></td>
	        <td>
	          <a href="index.php?page=edtj&id=<?= $r['id_jenis'] ?>" class="btn btn-info"><i class="fa fa-edit"> Edit</i></a>
	          <a href="index.php?page=hapj&id=<?= $r['id_jenis'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Jenis Laundry ini?');"><i class="fa fa-trash"> Hapus</i></a>
	        </td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>