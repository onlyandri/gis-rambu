<?php
	include 'koneksi.php';

	$id_kategori = $_POST['id_kategori_edit'];
	$nama_kategori = $_POST['nama_kategori_edit'];
	// echo $id_kategori;die;
	if (mysqli_query($koneksi, "UPDATE tb_kategori SET nama_kategori='".$nama_kategori."' WHERE id_kategori=$id_kategori")) {
		header("location:./?m=kategori");
	}else{
		header("location:./?m=kategori");
	}
?>