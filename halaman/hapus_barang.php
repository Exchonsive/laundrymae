<?php
$id	= $_GET['id'];

$sql 	= 'DELETE FROM barang WHERE id_barang="'.$id.'"';
$query	= mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
          alert('Barang berhasil Dihapus!');
          document.location.href= 'index.php?page=barang';
        </script>";
}else{
	echo "<script>
          alert('Barang Gagal Dihapus!');
          document.location.href= 'index.php?page=barang';
        </script>";
}
?>