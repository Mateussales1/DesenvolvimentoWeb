<?php 
	session_start();
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		
		
		if (($senha == "123") && ($usuario == "msac@gmail.com")){ 
			header("location: area.php");
		}


	}
	else {
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("location:index1.php");
	}
?>