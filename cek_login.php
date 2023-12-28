<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars(md5($_POST['password']));
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$hasil = mysqli_fetch_assoc($login);
// cek apakah username dan password di temukan pada database
if($cek == 0){
header('location:login.php?userfail');
}else{
	if ($password <> $hasil['password']) {
		header('location:login.php?passwordfail');
	}else{
		$_SESSION['username'] = $username;
		header('location:index.php');
	}
}
?>