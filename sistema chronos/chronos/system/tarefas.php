<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chronos Planejamento - Tarefas 2018</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">


	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	
	<?php include("menu.php"); ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tarefas</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-default">
			<div class="panel-heading">Tarefas</div>
			<div class="panel-body">
				<?php
					$msg = $_GET['msg'];

					if($msg == "yes"){
				 ?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-success">&nbsp;</em> Tarefa cadastrada com Sucesso</div>
			<?php }if($msg == "no"){ ?>
				<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Parece que deu algo errado tente novamente!</div>
			<?php }if($msg == "editOk"){ ?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-success">&nbsp;</em> Tarefa Editada com Sucesso</div>
			<?php } if($msg == "delOk"){ ?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-success">&nbsp;</em> Tarefa Excluida com Sucesso</div>
			<?php } ?>
				<br>

				<a style="text-decoration:none" href="add_tarefas.php"><button class="btn btn-default"><i style="margin:1%;" class=" fa fa-plus-circle"></i> Adicionar Tarefa</button></a>
				<br>
				<br>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">


					<thead>
						<tr>
							<th>Titulo</th>
							<th>Responsável</th>
							<th>Situação</th>
							<th>Data Prevista</th>
							<th>Ações</th>

						</tr>


					</thead>
					<tbody>

						<?php
						$consulta = mysql_query("SELECT *, date_format(dataNecessaria, '%d/%m/%Y') as dataNecessaria FROM tarefas WHERE deletado = 0");
						while ($dados = mysql_fetch_array($consulta)){

							$sit = $dados['situacao'];
							$resp = $dados['idUsuarioD'];
							?>
							<tr class="odd gradeX">

								<td><?php echo $dados['titulo']; ?></td>
								<td><?php if($resp == 0){ echo "Indefinido"; } else{
									$consulta = mysql_query("SELECT idUsuario, usuario FROM usuarios WHERE idUsuario = '$resp'");
									while ($dados1 = mysql_fetch_array($consulta)){
									 echo $dados1['usuario']; } }?></td>
									<td>
										<?php if($sit == 0){echo "Aberto";}
										if($sit == 1){echo "Em Andamento";}
										if($sit != 0 && $sit != 1){ echo "Finalizada";} ?></td>
										<td><?php echo $dados['dataNecessaria']; ?></td>
										<td><a href="edit_tarefas.php?id=<?php echo $dados['idTarefa']; ?>"><?php ?><button class="btn btn-warning">Editar</button></a>
											<a href="add_resp.php?id=<?php echo $dados['idTarefa']; ?>"><?php ?><button class="btn btn-default">Responsável</button></a>
											<a href="../controller.php?acao=delete_tarefa&id=<?php echo $dados['idTarefa']; ?>"><button class="btn btn-danger">Excluir</button></td>

											</tr>
											<?php 
										} ?>

									</tbody>
								</table>
							</div><!--/.row-->
						</div>	<!--/.main-->

						<script src="js/jquery-1.11.1.min.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="js/chart.min.js"></script>
						<script src="js/chart-data.js"></script>
						<script src="js/easypiechart.js"></script>
						<script src="js/easypiechart-data.js"></script>
						<script src="js/bootstrap-datepicker.js"></script>
						<script src="js/custom.js"></script>

						<script>
							$(document).ready(function() {
								$('#dataTables-example').DataTable({
									responsive: true
								});
							});
						</script>
						<script src="data/datatables/js/jquery.dataTables.min.js"></script>
						<script src="data/datatables-plugins/dataTables.bootstrap.min.js"></script>
						<script src="data/datatables-responsive/dataTables.responsive.js"></script>


					</body>
					</html>