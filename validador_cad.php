<?php

session_start();


if (isset($_POST['btn_cad'])){

include_once("conexao.php");


	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$rua = $_POST['rua'];
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$senhaC = $_POST['senhaC'];
	
}else{
$_SESSION['msg'] = "Nenhum dado enviado";	
header("location: formulario_cad.php");
}


if (!$conn->errno == 1062) {
			$_SESSION['msg'] = "CPF já cadastrado!";	
header("location: formulario_cad.php");
}


if ($senhaC == $senha){


$result_usuario = "insert into usuario (nome, idade, cidade, estado, rua, cpf, senha, created) values ('$nome','$idade','$cidade','$estado','$rua','$cpf','$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);




$result_login = "insert into login (login,senha,created) values ('$cpf','$senha',NOW())";
$resultado_login = mysqli_query($conn, $result_login);


$result_saldo = "insert into saldo (money,cpf) values ('0','$cpf')";
$resultado_saldo = mysqli_query($conn, $result_saldo);



}else{

	$_SESSION['msg'] = "Senhas não coincidem!";	
header("location: formulario_cad.php");
}


#AQUI JÁZ 4 HORAS MINHAS PARA REDIRECIONAR O CPF JÁ CADASTRADO!!!!!!!!!










/*$passarvalorlogin = "insert into login (login,senha,created) (select cpf,senha,NOW() from usuario where )";
$resultadopassval = mysqli_query($conn, $passarvalorlogin);*/






if (mysqli_insert_id($conn)){
$_SESSION['msg'] = "Usuario cadastrado com sucesso";	
header("location: formulario_cad.php");

}else{
$_SESSION['msg'] = "Senhas não coincidem!";
	header("location: formulario_cad.php");


}



?>