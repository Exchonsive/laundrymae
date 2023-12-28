<?php 
	if(isset($_POST['submit'])){
		$tgl1 = $_POST['tanggal1'];
		$tgl2 = $_POST['tanggal2'];

		$i=1;
		$ta=mysqli_query($koneksi,"SELECT * FROM pembelian WHERE tgl BETWEEN '$tgl1' AND '$tgl2' ORDER BY no_pembelian ASC");
?>
<div class="box-header">
<h2><strong><center>LAPORAN DATA PEMBELIAN</center></strong></h2>
<h5><strong><center><?= TanggalIndo($tgl1); ?> - <?= TanggalIndo($tgl2); ?></center></strong></h5>
</div>

<div class="box-body">

	<table class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Tanggal Pembelian</th>
	      <th>Nama Supplier</th>
	      <th>Nama Barang</th>
	      <th>Total Barang</th>
	      <th>Total Harga</th>
	    </tr>
    </thead>
    <tbody>
    	<tr>
    		<?php while($data = mysqli_fetch_array($ta)){ ?>
    		<td><?= $i; ?></td>
    		<td><?= TanggalIndo($data['tgl']); ?></td>
    		<td><?= $data['supplier']; ?></td>
    		<td><?= $data['barang']; ?></td>
    		<td><?= $data['totali']; ?></td>
    		<td>Rp.<?= $data['totalh']; ?></td>
    	</tr>
    	<?php $i++; ?>
    	<?php 
	    	$total += $data['totalh'];
	     ?>
    <?php } ?>
    </tbody>
    <tbody>
		<tr>
			<td colspan='5' style="background-color:#828282; color:#ffffff;"><center><strong>JUMLAH TOTAL PEMBELIAN</strong></center></td>
			<td colspan="2"><strong id='label_total_pesanan'>Rp. <?= $total; ?></strong></td>
		</tr>
	</tbody>
</table>
<?php } ?>
</div>
<script>
	window.print();
</script>