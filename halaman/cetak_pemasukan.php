<?php 
	if(isset($_POST['submit'])){
		$tgl1 = $_POST['tanggal1'];
		$tgl2 = $_POST['tanggal2'];

		$i=1;
		$ta=mysqli_query($koneksi,"SELECT * FROM transaksi WHERE tgl_transaksi BETWEEN '$tgl1' AND '$tgl2' ORDER BY kode_transaksi ASC");
?>
<div class="box-header">
<h2><strong><center>LAPORAN PEMASUKAN</center></strong></h2>
<h5><strong><center><?= TanggalIndo($tgl1); ?> - <?= TanggalIndo($tgl2); ?></center></strong></h5>
</div>

<div class="box-body">

	<table class="table table-bordered table-striped">
    <thead>
	    <tr>
	      <th>No</th>
	      <th>Nomor Transaksi</th>
	      <th>Nama Konsumen</th>
	      <th>Tanggal Transaksi</th>
	      <th>Nama Kasir</th>
	      <th>Total Harga</th>
	    </tr>
    </thead>
    <tbody>
    	<tr>
    		<?php while($data = mysqli_fetch_array($ta)){ ?>
    		<td><?= $i; ?></td>
    		<td><?= $data['kode_transaksi']; ?></td>
    		<td><?= $data['nama_konsumen']; ?></td>
    		<td><?= TanggalIndo($data['tgl_transaksi']); ?></td>
    		<td><?= $data['nama_kasir']; ?></td>
    		<td>Rp.<?= $data['tarif']; ?></td>
    	</tr>
    	<?php $i++; ?>
    	<?php 
	    	$total += $data['tarif'];
	     ?>
    <?php } ?>
    </tbody>
    <tbody>
		<tr>
			<td colspan='5' style="background-color:#828282; color:#ffffff;"><center><strong>JUMLAH TOTAL PEMASUKAN</strong></center></td>
			<td colspan="2"><strong id='label_total_pesanan'>Rp. <?= $total; ?></strong></td>
		</tr>
	</tbody>
</table>
<?php } ?>
</div>
<script>
	window.print();
</script>