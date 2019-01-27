<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chronos Planejamento - Colaboradores 2018</title>
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
				<li class="active">Colaboradores</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-default">
			<div class="panel-heading">Colaboradores</div>
			<div class="panel-body">
				<?php
					$msg = $_GET['msg'];

					if($msg == "yes"){
				 ?>
				<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-success">&nbsp;</em> Colaborador cadastrado com Sucesso</div>
			<?php }if($msg == "no"){ ?>
				<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Parece que deu algo errado tente novamente!</div>
			<?php } ?>
				<br>

				<a style="text-decoration:none" href="add_colaboradores.php"><button class="btn btn-default"><i style="margin:1%;" class=" fa fa-plus-circle"></i> Adicionar Colaborador</button></a>
				<br>
				<br>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">


					<thead>
						<tr>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Tipo</th>
							<th>Ações</th>

						</tr>


					</thead>
					<tbody>

						<?php
						$consulta = mysql_query("SELECT * FROM usuarios");
						while ($dados = mysql_fetch_array($consulta)){ ?>
							<tr class="odd gradeX">

								<td><?php echo $dados['usuario']; ?></td>
								<td><?php echo $dados['email']; ?></td>
								<td><?php echo $dados['tipo']; ?></td>
								<td><a href="edit_colaboradores.php?id=<?php echo $dados['idUsuario']; ?>"><button class="btn btn-warning">Editar</button></a>
									<a href="../controller.php?acao=delete_colaboradores&id=<?php echo $dados['idUsuario']; ?>"><button class="btn btn-danger">Excluir</button></td>

								</tr>
							<?php } ?>

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