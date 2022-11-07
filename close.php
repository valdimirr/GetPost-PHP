<?php
include("conexao.php");
mysqli_close($conn);

unset ($_SESSION['nome_pess']);
unset ($_SESSION['saldo']);
unset ($_SESSION['login']);
unset ($_SESSION['senha']);


header("location: index.php");

?>