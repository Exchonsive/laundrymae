<?php
$id	= $_GET['id'];

$sql 	= 'DELETE FROM konsumen WHERE id_konsumen="'.$id.'"';
$query	= mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
          alert('konsumen Berhasil Dihapus!');
          document.location.href= 'index.php?page=datako';
        </script>";
}else{
	echo "<script>
          alert('konsumen Gagal Dihapus!');
          document.location.href= 'index.php?page=datako';
        </script>";
}
?>