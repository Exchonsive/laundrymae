<div class="box-header">
  <h3 class="box-title">Data Supplier</h3>
  <br><br>
  <a href="index.php?page=tambahsupplier" class="btn btn-success">Tambah Supplier <i class="fa fa-plus"></i></a>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nama </th>
	      <th>Alamat</th>
	      <th>Telepon</th>
	      <th>Aksi</th>
	    </tr>
    </thead>
    <tbody>
	    <tr>
    	<?php
			$i=1;
			$tp=mysqli_query($koneksi,"SELECT * FROM supplier");
		?>
			<?php $i=1 ?>
        	<?php foreach ($tp as $r):?>
	      	<td><?= $i; ?></td>
	        <td><?= $r["nama"];?></td>
	        <td><?= $r["alamat"];?></td>
	        <td><?= $r["telp"];?></td>
	        <td>
	        	<a class="btn btn-info" href="index.php?page=editsupplier&id=<?= $r['id_supplier']; ?>"><i class="fa fa-edit"></i> Edit</a>
	        	<a class="btn btn-danger" onclick="return confirm('Hapus Supplier ini?');" href="index.php?page=hapussupplier&id=<?= $r['id_supplier']; ?>"><i class="fa fa-trash"></i> Hapus</a>
	        </td>
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>