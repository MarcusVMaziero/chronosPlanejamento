<?php 
error_reporting(0);
include("conexao.php");
session_start();
  $usuario = $_SESSION['usuario'];
  $consulta= mysql_query("select * from usuarios where email='$usuario'");
  while($sql = mysql_fetch_array($consulta)){
	$nivel = $sql['tipo'];
  $nome = $sql['usuario'];
  $empresa = $sql['empresa'];
  }
  
  if(isset($nivel)){

  } else {
	 echo" <script>window.location.href='../controller.php?acao=sair_sistema';</script>";
  }
	 
?>