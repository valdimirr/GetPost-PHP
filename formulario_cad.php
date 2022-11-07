<?php
session_start();
?>
<!DOCTYPE html>


<link rel="stylesheet" type="text/css" href="style_cad.css">



<header>
<p>Formulário de cadastro</p>
</header>

<body>

<div class="div_aviso">
	<p class="msg"><?php
			if(isset($_SESSION['msg'])){

				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

			?></p>
</div>


<div class="div_form">
	
<form action="validador_cad.php" method="POST">
	
<p class="p_title">Nome</p>
	<input placeholder="Nome" required="required" maxlength="15" name="nome">
<p class="p_title">Idade</p>
	<input  placeholder="Idade"name="idade" type="text" maxlength="3" required="required"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
<p class="p_title">Cidade</p>
	<input placeholder="Cidade" required="required" maxlength="15" name="cidade">
<p class="p_title">Estado</p>
	<input  placeholder="Estado" required="required" maxlength="2" name="estado">	
<p class="p_title">Rua</p>
	<input placeholder="Rua" required="required" maxlength="15" name="rua">
<p class="p_title">CPF</p>
	<input  placeholder="CPF" required="required" name="cpf" type="text" minlength="11" maxlength="11" required="required"  onkeypress='return event.charCode <= 59'>
<p class="p_title">Senha</p>
	<input placeholder="Senha" id="senha" required="required" maxlength="15" type="password" name="senha">
<p class="p_title">Confirme a Senha</p>
	<input  type="password" id="senhaC" placeholder="Confirme a senha" maxlength="15" required="required" name="senhaC" >

<button class="button_enviar" type="submit" name="btn_cad">Enviar</button>
<button class="button_enviar" type="reset">Limpar</button>

</form>
<form action="index.php">
<button type="submit" class="btn_cad">Voltar ao menu</button>
</form>


</div>



























</body>
</html>
