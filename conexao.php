<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "clientes";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{

	
}



/*if(mysql_insert_id($conn)){


}else{


}*/




?>