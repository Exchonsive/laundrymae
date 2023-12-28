<?php
$kode_transaksi = $_GET['id']; 
$kueri = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE kode_transaksi = '$kode_transaksi'");
$zep = mysqli_fetch_array($kueri);
$jenis = $zep['jenis'];
$kueri1 = mysqli_query($koneksi,"SELECT * FROM jenis_laundry WHERE jenis = '$jenis'");
$sss = mysqli_fetch_array($kueri1);
 ?>
<div class="box-header">
<h3><strong><center>Detail Laundry</center></strong></h3>
</div>

<div class="box-body">
	<br>
<table class='table table-bordered'>
	<tbody>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Nomor Laundry</td>
			<td><?= $zep['kode_transaksi'] ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Nama Konsumen</td>
			<td><?= $zep['nama_konsumen'] ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Alamat Lengkap</td>
			<td><?= $zep['alamat'] ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Telepon</td>
			<td><?= $zep['telp'] ?></td>
		</tr>
		
		<tr> 
			<td width='27%' style="background-color:#828282; color:#ffffff;">Tanggal Ambil</td>
			<td><?= TanggalIndo($zep['tgl_ambil']) ?></td>
		</tr>
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Status</td>
			<td><?= $zep['status']; ?></td>
		</tr>		
		<tr>
			<td width='27%' style="background-color:#828282; color:#ffffff;">Nama Kasir</td>
			<td><?= $zep['nama_kasir']; ?></td>
		</tr>
	</tbody>
</table>
<br>
<table class='table table-bordered '>
			<thead>
				<tr>
					<th>Tanggal Laundry</th>
					<th>Jenis Laundry</th>
					<th width='20%'>Berat Cucian</th>
					<th width='20%'>Harga/Kg</th>
					<th width='20%'>Diskon</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td><?= TanggalIndo($zep['tgl_transaksi']); ?></td>
					<td><?= $zep['jenis']; ?></td>
					<td><?= $zep['berat']; ?> kg</td>
					<td>Rp. <?= $sss['harga']; ?></td>
					<td><?= $zep['diskon']; ?></td>
				</tr>
			</tbody>
			
			<tbody>
				<tr>
					<td colspan='4' style="background-color:#828282; color:#ffffff;"><center><strong>TOTAL HARGA</strong></center></td>
					<td><strong id='label_total_pesanan'>Rp. <?= $zep['tarif']; ?></strong></td>
				</tr>
			</tbody>
		</table>
		<br>
		<div class="p" >
		<p><b>*)</b>Setiap transaksi lebih dari 12kg akan mendapatkan <strong>DISKON SEBESAR 10%</strong></p>
		<p><b>*)</b>Setiap pengambilan cucian <b>WAJIB</b> Membawa Struk ini</p>
		<p><b>*)</b>Status Pembayaran yang belum lunas <b>WAJIB</b> membayar saat pengambilan cucian</p>
		<p><b>*)</b>Kami tidak melayani laporan kehilangan/kerusakan saat cucian sudah dibawa pulang</p><br>
		<p><b>Terimakasih Sudah Menggunakan Jasa kami!</b></p>
		</div>
</div>
<script>
	window.print();
</script>