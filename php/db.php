<?php
	class db{
		private $host = 'localhost';
		private $user = 'root';
		private $pwd = '';
		private $database = 'trab_jamv';

		function mysqlConection(){
			$con = mysqli_connect($this->host, $this->user, $this->pwd, $this->database);
			mysqli_set_charset($con,'utf8');

			if(mysqli_connect_errno()){
				echo 'erro na conexão com banco de dados: ' .mysqli_connect_error();
			}
			return $con;
		}
	}
?>