<div class="box-header">
  <h3 class="box-title">Data Konsumen</h3>
  <br><br>
  <a href="index.php?page=tmbhk" class="btn btn-success"><i class="fa fa-plus"> Tambah Konsumen</i></a>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nama Konsumen</th>
	      <th>Alamat Konsumen</th>
	      <th>Telepon</th>
	      <th>Aksi</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM konsumen");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= $r["nama"];?></td>
	        <td><?= $r["alamat"];?></td>
	        <td><?= $r["telp"];?></td>
	        <td>
	        	<a class="btn btn-info" href="index.php?page=editkonsumen&id=<?= $r['id_konsumen']; ?>" ><i class="fa fa-edit"></i>Edit</a>
	        	<a class="btn btn-danger" href="index.php?page=hapuskonsumen&id=<?= $r['id_konsumen']; ?>" onclick="return confirm('Hapus Konsumen ini?');"><i class="fa fa-hapus"></i><i class="fa fa-trash"></i> Hapus</a>
	        </td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>