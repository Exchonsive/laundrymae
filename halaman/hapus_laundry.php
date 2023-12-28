<?php
$id	= $_GET['id'];

$sql 	= 'DELETE FROM transaksi WHERE kode_transaksi="'.$id.'"';
$query	= mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
          alert('Laundry Berhasil Dihapus!');
          document.location.href= 'index.php?page=lndry';
        </script>";
}else{
	echo "<script>
          alert('Laundry Gagal Dihapus!');
          document.location.href= 'index.php?page=lndry';
        </script>";
}
?>