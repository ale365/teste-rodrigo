<?php

// IF VERIFICA SE EXISTE LGUMAS DESSAS VARIAVEIS
if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['tel'])){
	header('Location:index.html');
}else{
// Declarando as Variaveis
	$nome 	=	'';
	$email	=	'';
	$tel	=	'';
	$msg	=	'';

// Pegando os valores enviados pelo formulario
	$nome	=	$_POST['nome'];
	$email	=	$_POST['email'];
	$tel	=	$_POST['tel'];
	$msg	=	$_POST['msg'];

	echo $nome.' ===> Este e o nome do sujeito<br>';
	echo $email.' ===> Este e o email do fulano';
	echo $tel.' ===> Este e o Telefone do sujeito<br>';
	echo $meg.' ===> Este e o Mensagem do fulano';
	exit;
}

?>