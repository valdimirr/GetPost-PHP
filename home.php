<?php
include("dados.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style_homee.css">
	<title>Bem vindo</title>
</head>
<header>
	
<div class="div_header"><?php echo $_SESSION['nome_pess']?></div>
<div class="div_header2">Saldo: <?php echo $_SESSION['saldo']?> </div>
</header>

<div>
<form action="update.php" method="POST">
	
<p class="p_title">Depositar</p>
	<input placeholder="Deposite" maxlength="10" name="depo">
	<br><button class="button_enviar" type="submit" name="btn_depo" onkeypress='return event.charCode <= 59'>Depositar</button>
<p class="p_title">Sacar</p>
	<input  placeholder="Saque"name="saca" type="text" maxlength="10">
<br>
<button class="button_enviar" type="submit" name="btn_saca" onkeypress='return event.charCode <= 59' >Sacar</button><br><br>
<button class="button_enviar" type="reset" type="number">Limpar</button>

</form>
</div>
<div>
<form action="close.php">
<button type="submit" class="btn_cad">Deslogar</button>
</form>
	</div>






<body>
</body>
</html>