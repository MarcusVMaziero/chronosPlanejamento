<?php
include("conexao.php");


$acao = $_GET['acao'];

if($acao == "acessar_sistem"){
	
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$verifica = addslashes($_POST['verifica']);

	if($verifica == 0){

		$consulta= mysql_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

		if(mysql_num_rows($consulta) > 0)
		{
			session_start();
			$_SESSION['usuario']=$email;
			echo "<script>window.location.href='system/index.php'</script>";
		}
		else
		{	
			echo "<script>window.location.href='index.php?msg=erro'</script>";
		}

	}
}
if($acao == "sair_sistema"){

	error_reporting(0);
	session_start(); session_destroy();
	echo "<script>window.location.href='index.php'</script>";
}
/////////////////////////////////////////////////COLABORADORES
if($acao == "add_colaboradores"){

	$nome = addslashes($_POST['nome']);

	$foto = $_FILES ['foto'];

	$email = addslashes($_POST['email']);

	$senha = addslashes($_POST['senha']);

	$tipo = addslashes($_POST['tipo']);

	$pasta_diretorio="img/";

	$arquivo = $pasta_diretorio.$foto["name"];
	move_uploaded_file($foto['tmp_name'],$arquivo);


	mysql_query ("INSERT INTO usuarios (email, senha, tipo, foto, usuario, empresa) VALUES ('$email', '$senha', '$tipo', '$arquivo', '$nome', '1')");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/colaboradores.php?msg=yes'</script>";	
}
if($acao == "edit_colaboradores"){

	$idUser = addslashes($_POST['id']);

	$nome = addslashes($_POST['nome']);

	$foto = $_FILES ['foto'];

	$email = addslashes($_POST['email']);

	$tipo = addslashes($_POST['tipo']);

	$pasta_diretorio="img/";

	$arquivo = $pasta_diretorio.$foto["name"];
	move_uploaded_file($foto['tmp_name'],$arquivo);


	mysql_query ("UPDATE usuarios SET usuario = '$nome', email = '$email', tipo = '$tipo' WHERE idUsuario = '$idUser'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/colaboradores.php?msg=editOk'</script>";	
}
if($acao == "delete_colaboradores"){

	$id = $_GET['id'];

	mysql_query ("DELETE FROM usuarios WHERE idUsuario = '$id'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/colaboradores.php?msg=delOk'</script>";	
}
//////////////////////////////////////////OBRAS
if($acao == "add_obras"){

	$nome = addslashes($_POST['nome']);

	$endereco = addslashes($_POST['endereco']);

	$cep = addslashes($_POST['cep']);

	$datafinal = addslashes($_POST['dataf']);

	mysql_query ("INSERT INTO obras (nome, endereco, cep, dataFinal) VALUES ('$nome', '$endereco', '$cep', '$datafinal')");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/obras.php?msg=yes'</script>";	
}
if($acao == "edit_obras"){

	$id = addslashes($_POST['id']);

	$nome = addslashes($_POST['nome']);

	$endereco = addslashes($_POST['endereco']);

	$cep = addslashes($_POST['cep']);

	$datafinal = addslashes($_POST['dataf']);

	mysql_query ("UPDATE obras SET nome = '$nome', endereco = '$endereco', cep = '$cep', dataFinal = '$datafinal' WHERE idObra = '$id'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/obras.php?msg=editOk'</script>";	
}
if($acao == "delete_obras"){

	$id = $_GET['id'];

	mysql_query ("DELETE FROM obras WHERE idObra = '$id'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/obras.php?msg=delOk'</script>";	
}
/////////////////////////////////////////TAREFAS ////////////////////////////////////
if($acao == "add_tarefas"){

	$titulo = addslashes($_POST['titulo']);

	$datap = addslashes($_POST['dataP']);

	$desc = addslashes($_POST['descricao']);

	mysql_query ("INSERT INTO tarefas (titulo, dataNecessaria, descricao, idUsuarioC) VALUES ('$titulo', '$datap', '$desc', '$id')");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/tarefas.php?msg=yes'</script>";	
}
if($acao == "add_resp"){

	$idTarefa = addslashes($_POST['idtarefa']);

	$resp = addslashes($_POST['resp']);

	mysql_query ("UPDATE tarefas SET idUsuarioD = '$resp' WHERE idTarefa = '$idTarefa'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/tarefas.php?msg=respOk'</script>";	
}

if($acao == "edit_tarefa"){

	$idTarefa = addslashes($_POST['idtarefa']);

	$titulo = addslashes($_POST['titulo']);

	$datap = addslashes($_POST['dataP']);

	$desc = addslashes($_POST['descricao']);

	mysql_query ("UPDATE tarefas SET titulo = '$titulo', dataNecessaria = '$datap', descricao = '$desc' WHERE idTarefa = '$idTarefa'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/tarefas.php?msg=editOk'</script>";	
}
if($acao == "delete_tarefa"){

	$id = $_GET['id'];

	mysql_query ("UPDATE tarefas SET deletado = '1' WHERE idTarefa = '$id'");

	echo "<script language='javascript' type='text/javascript'>window.location.href='system/tarefas.php?msg=delOk'</script>";	
}
?>