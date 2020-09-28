<?php

$hostname = '54.224.23.187';
$username = 'docker';
$password = 'docker';
$database = 'docker';
 
	try {
		
		$dsn = "pgsql:host=$hostname;port=5432;dbname=$database;user=$username;password=$password";
		$conexao = new PDO($dsn);
		
	}catch(PDOException $e)
    {
    	echo $e->getMessage();
    }
?>