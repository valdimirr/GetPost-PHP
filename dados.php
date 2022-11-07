<?php
session_start();

include("conexao.php");
if (isset($_SESSION['login'])){


$login = $_SESSION['login'];

}else{
	echo 'sem info';
}





$result = mysqli_query($conn, "SELECT us.nome   
	FROM usuario us, login lo 
	WHERE us.id = lo.id
	AND '$login' = us.cpf;
 
");
 

$row = mysqli_fetch_assoc($result);
$_SESSION['nome_pess'] = $row['nome'];



$resultM = mysqli_query($conn, "SELECT s.money   
	FROM saldo s, login lo 
	WHERE lo.id = s.id
	and '$login' = s.cpf;  
	
 
");
 

$rowM = mysqli_fetch_assoc($resultM);
$_SESSION['saldo'] = $rowM['money'];













#echo var_dump($row['nome']);



/*$result = mysqli_query($conn, "SELECT id   
	FROM login
	WHERE '$login' = login;
 
");
 

$row = mysqli_fetch_assoc($result);

echo var_dump($row);
*/








?>