<?php
$id	= $_GET['id'];

$sql 	= 'DELETE FROM pengguna WHERE id_pengguna="'.$id.'"';
$query	= mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
          alert('Pengguna berhasil Dihapus!');
          document.location.href= 'index.php?page=krywn';
        </script>";
}else{
	echo "<script>
          alert('Pengguna Gagal Dihapus!');
          document.location.href= 'index.php?page=krywn';
        </script>";
}
?>