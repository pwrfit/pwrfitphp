<?php 

	session_start();

	if (!isset($_SESSION['rol'])) {
		header('location: index');
	}else {
		if ($_SESSION['rol'] != 1) {
			header('location: index');
		}
	}

	include_once 'conect.php';
	if(isset($_GET['IdUsuario'])){
		$id=$_GET['IdUsuario'];
		$sql = "DELETE FROM usuarios WHERE IdUsuario='$id'";
		$result = mysqli_query($conn, $sql);
		header('location: ../admin');
		if($result){
			$sql = "ALTER TABLE usuarios AUTO_INCREMENT=1";
			$result = mysqli_query($conn, $sql);
			if($result){
				echo "<script>alert('El usuario ha sido eliminado exitósamente'); window.location='../admin'</script>";
			}
		}
	}else{
		header('location: ../admin');
	}
 ?>