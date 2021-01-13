<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$id = $_POST['id'];
		$password = $_POST['password'];
		
		require_once('dbConnect.php');
		
		$sql = "UPDATE user_detail SET password = '$password' WHERE id = $id;";
		
		if(mysqli_query($con,$sql)){
			echo 'Password berhasil diperbarui!';
		}else{
			echo 'Gagal memperbarui password';
		}
		
		mysqli_close($con);
	}