<div class="box-header">
  <h3 class="box-title">Data Pengguna</h3>
  <br><br>
  <a href="index.php?page=tambahpengguna" class="btn btn-success">Tambah Pengguna <i class="fa fa-plus"></i></a>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nama </th>
	      <th>NIK </th>
	      <th>Alamat</th>
	      <th>Telepon</th>
	      <th>Gender</th>
	      <th>Level</th>
	      <th>Aksi</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM pengguna");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= $r["nama"];?></td>
	        <td><?= $r["nik"];?></td>
	        <td><?= $r["alamat"];?></td>
	        <td><?= $r["telp"];?></td>
	        <td><?= $r["gender"];?></td>
	        <td><?= $r["level"];?></td>
	        <td>
	        	<a class="btn btn-info" href="index.php?page=detailpengguna&id=<?= $r['id_pengguna']; ?>"><i class="fa fa-info"></i> Detail</a>
	        	<a class="btn btn-danger" href="index.php?page=hapuspengguna&id=<?= $r['id_pengguna']; ?>" onclick="return confirm('Hapus Pengguna ini?');"><i class="fa fa-trash"></i> Hapus</a>
	        </td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>