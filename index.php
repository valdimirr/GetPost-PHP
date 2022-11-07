
<?php
session_start();
?>

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">

<header>
	<p>Banco Valdoflinstons</p>	
	

</header>
<body>
	
		
<div class="div_form">
	
		
			<?php
			if(isset($_SESSION['msg'])){

				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

			?>

		
	<form  action="validador.php" method="POST">
<p class="p_title">CPF</p>
	<input placeholder="CPF" required="required" maxlength="11" minlength="11" onkeypress='return event.charCode <= 59' type="text" name="login">
<p class="p_title">Senha</p>
	<input type="password" placeholder="Senha" maxlength="15" required="required" name="senha">
	
		<button class="button_enviar" type="submit" name="btn_login">Entrar</button>

	
		
	
	

</form>


<form action="formulario_cad.php">
<button type="submit" name="btn_cad" class="btn_cad">Cadastre-se</button>
</form>



</div>



</body>
</html