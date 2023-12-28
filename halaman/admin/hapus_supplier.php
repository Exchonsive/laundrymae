<?php
$id	= $_GET['id'];

$sql 	= 'DELETE FROM supplier WHERE id_supplier="'.$id.'"';
$query	= mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
          alert('Supplier berhasil Dihapus!');
          document.location.href= 'index.php?page=spplr';
        </script>";
}else{
	echo "<script>
          alert('Pengguna Gagal Dihapus!');
          document.location.href= 'index.php?page=spplr';
        </script>";
}
?>