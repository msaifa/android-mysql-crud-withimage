<?php 
	$id = $_GET['id'];
	
	require_once('dbConnect.php');
	
	$sql = "DELETE FROM user_detail WHERE id=$id;";
	
	if(mysqli_query($con,$sql)){
		echo 'Pegawai berhasil dihapus';
	}else{
		echo 'Gagal menghapus pegawai!';
	}
	
	mysqli_close($con);
