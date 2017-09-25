<?php
	require_once('db.php');

	$user = $_POST['user'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$pwd = md5($pwd);

	$emailExist = false;

	$dB = new db();
	$linkCon = $dB->mysqlConection();

	$sqlTest = "SELECT * FROM usuarios WHERE usuario == '$user'";
	if($id = mysqli_query($linkCon, $sqlTest)){
		$dados = mysqli_fetch_array($id);
		if(isset($dados['email'])){
			echo 'Usuário já cadastrado';
			$email = true;
		}
		else{
			echo 'Usuário ainda não cadastrado';
		}
	}
	else{
		echo 'Erro ao procurar usuário no banco de dados';
	}

	if($email){
		header('Location: ../index.php?error=2');
	}

	$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$user','$email','$pwd')";

	if(mysqli_query($linkCon, $sql)){
		echo 'Registro do usuário efetuado com sucesso';
	}
	else{
		echo 'Houve algum error no registro do usuário: ' .mysqli_error($linkCon);
	}
?>