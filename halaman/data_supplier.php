<div class="box-header">
  <h3 class="box-title">Data Supplier</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nama Supplier</th>
	      <th>Alamat Supplier</th>
	      <th>Telepon</th>
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
	    </tr>
	    <?php $i++ ?>
        <?php endforeach; ?>
	</tbody>
   </table>