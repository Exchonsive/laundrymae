<?php
$id	= $_GET['id'];

$sql 	= 'DELETE FROM jenis_laundry WHERE id_jenis="'.$id.'"';
$query	= mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
          alert('Jenis laundry berhasil Dihapus!');
          document.location.href= 'index.php?page=jenis';
        </script>";
}else{
	echo "<script>
          alert('Jenis laundry Gagal Dihapus!');
          document.location.href= 'index.php?page=jenis';
        </script>";
}
?>