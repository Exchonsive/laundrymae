<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>
<body>
	<?php 
		if (isset($_GET['page'])) {
			$page = $_GET['page'];

			switch ($page) {
				case 'dasbor':
					include "halaman/halaman_utama.php";
					break;
				case 'lndry':
					include "halaman/laundry.php";
					break;
				case 'tmbhk':
					include "halaman/tambah_konsumen.php";
					break;
				case 'barang':
					include "halaman/barang.php";
					break;
				case 'datako':
					include "halaman/data_konsumen.php";
					break;
				case 'editkonsumen':
					include "halaman/edit_konsumen.php";
					break;
				case 'hapuskonsumen':
					include "halaman/hapus_konsumen.php";
					break;
				case 'datas':
					include "halaman/data_supplier.php";
					break;
				case 'beli':
					include "halaman/pembelian.php";
					break;
				case 'jenis':
					include "halaman/jenis.php";
					break;
				case 'pakai':
					include "halaman/pemakaian.php";
					break;
				case 'tmbhl':
					include "halaman/tambah_laundry.php";
					break;
				case 'tmbhb':
					include "halaman/tambah_barang.php";
					break;
				case 'tmbhs':
					include "halaman/tambah_stok.php";
					break;
				case 'tmbhj':
					include "halaman/tambah_jenis.php";
					break;
				case 'pakeb':
					include "halaman/pakai_barang.php";
					break;
				case 'edtj':
					include "halaman/edit_jenis.php";
					break;
				case 'hapj':
					include "halaman/hapus_jenis.php";
					break;
				case 'hapb':
					include "halaman/hapus_barang.php";
					break;
				case 'detl':
					include "halaman/detail_laundry.php";
					break;
				case 'ctkl':
					include "halaman/cetak_laundry.php";
					break;
				case 'ctkpemasukan':
					include "halaman/cetak_pemasukan.php";
					break;
				case 'ctkbeli':
					include "halaman/cetak_pembelian.php";
					break;
				case 'hapl':
					include "halaman/hapus_laundry.php";
					break;
				case 'krywn':
					include "halaman/admin/pengguna.php";
					break;
				case 'tambahpengguna':
					include "halaman/admin/tambah_pengguna.php";
					break;
				case 'detailpengguna':
					include "halaman/admin/detail_pengguna.php";
					break;
				case 'hapuspengguna':
					include "halaman/admin/hapus_pengguna.php";
					break;
				case 'spplr':
					include "halaman/admin/supplier.php";
					break;
				case 'hapussupplier':
					include "halaman/admin/hapus_supplier.php";
					break;
				case 'tambahsupplier':
					include "halaman/admin/tambah_supplier.php";
					break;
				case 'editsupplier':
					include "halaman/admin/edit_supplier.php";
					break;

				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
			}
		}else{
			include "halaman/halaman_utama.php";
		}
	 ?>
</body>
</html>