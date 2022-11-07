<?php
if (isset($_POST['btn_depo'])):
session_start();
include_once("conexao.php");


	$depo = $_POST['depo'];
	$saca = $_POST['saca'];
	$login = $_SESSION['login'];
	


$depo = mysqli_query($conn, "UPDATE saldo SET money = money + '$depo'  
	#FROM saldo s, login lo 
	#WHERE lo.id = s.id
	#and '$login' = s.cpf
	where  cpf = '$login'; 

	
	;  
	
 
");
 

$rowDepo = $depo;
echo var_dump($rowDepo);
$_SESSION['saldo'] = $rowDepo['money'];
header("location: home.php");

endif;

if (isset($_POST['btn_saca'])):
session_start();
include_once("conexao.php");


	$depo = $_POST['depo'];
	$saca = $_POST['saca'];
	$login = $_SESSION['login'];



	
	

$saca = mysqli_query($conn, "UPDATE saldo SET money = money - '$saca'  
	#FROM saldo s, login lo 
	#WHERE lo.id = s.id
	#and '$login' = s.cpf
	where  cpf = '$login'; 

	
	;  
	
 
");
 

$rowSaca = $saca;
echo var_dump($rowSaca);
$_SESSION['saldo'] = $rowSaca['money'];
header("location: home.php");

endif;




echo "deu ruim";













?>