<?php
include '../../config/koneksi.php';

switch($_GET['act']){
    case 'barang' :
        $sql = mysqli_query($conn,"DELETE FROM baju WHERE id_baju='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../_barang.php');
		}
    break;

    case 'brand' :
        $sql = mysqli_query($conn,"DELETE FROM produk WHERE id_produk='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../_brand.php');
		}
    break;

    case 'member' :
        $sql = mysqli_query($conn,"DELETE FROM member WHERE id='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../_member.php');
		}
    break;

}
?>