<?php
	session_start();
	require_once("db.php");
	$email = $_POST['emailLogin'];
	$pwd = $_POST['pwdLogin'];
	$pwd = md5($pwd);

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$pwd'";

	$dB = new db();
	$linkCon = $dB->mysqlConection();

	$id = mysqli_query($linkCon, $sql);

	if($id){
		$dados = mysqli_fetch_array($id);
		if(isset($dados['email'])){
			$_SESSION['email'] = $dados['email'];
			header('Location: ../home.php');
		}
		else{
			header('Location: ../index.php?error=1');
		}
	}else{
		echo 'Erro na autenticação!';
	}

?>