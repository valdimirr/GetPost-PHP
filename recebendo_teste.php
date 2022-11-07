<?php

//var_dump($_GET);

/*if ((isset($_GET['acao'])) ? $acao = $_GET['acao'] : $acao = null);
if ((isset($_GET['id'])) ? $id = $_GET['id'] : $id = null);

switch ($acao) {
	case 'excluir':
		echo 'Excluido um registro do banco de dados de id= '.$id;
		break;
case 'add':
		echo 'Adicionado um registro no banco de dados de id= '.$id;
		break;	
	default:
		echo'Não entendi oq ele falou';
		break;

$contar = range(1, 10);
foreach($contar as $valor){
    echo "$valor";




}


};
*/

if(isset($_POST['enviar'])):

	$para = $_POST['para'];
	$assunto = $_POST['assunto'];
	$headers = $_POST['headers'];
	$mensagem = $_POST['corpo'];
	endif;

	 if (mail($para,$assunto,$headers,$mensagem)) {


	 	echo 'deu bom';
	 }else{
	 	echo 'deu ruim';
	 }



	 	;
		/*$aviso = 'Email enviado com sucesso';
		echo $aviso;
else:
	$aviso = 'Falha ao enviar';
	echo $aviso;

endif;
*/

	
	


?>