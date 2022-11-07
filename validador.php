<?php

session_start();


if (isset($_POST['btn_login'])){

include_once("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];
$_SESSION['login'] = $login;	
}else{
$_SESSION['msg'] = "Nenhum dado enviado";	
header("location: index.php");

}



/*$res = mysqli_query($conn, "SELECT id, login, senha
FROM login
WHERE login =  . $login. WHERE senha = .$senha");


$row = mysqli_fetch_assoc($res);
echo '<pre>';var_dump($row);exit;


$SQL = "SELECT id, login, senha
FROM login
WHERE login = " . $login;
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);*/


$result = mysqli_query($conn, "SELECT id, login, senha FROM login
WHERE login = '$login' AND senha = '$senha' ");


$row = mysqli_fetch_assoc($result);


if (empty($row)){

echo "\nUsuário inexistente!\n\n";


}else{

echo print_r($row);


header("location: home.php");





}























?>