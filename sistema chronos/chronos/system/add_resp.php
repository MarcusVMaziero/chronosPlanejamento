<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chronos Planejamento - Adicionar Responsável Tarefas</title>
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
<?php// include ('../controller.php');?>
</head>
<body>
	
	<?php include("menu.php"); ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tarefa - Responsável</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-default">
			<div class="panel-heading">Adicionar Responsável</div>
			<div class="panel-body">
				<?php

					$id = $_GET['id'];
						$consulta = mysql_query("SELECT * FROM tarefas WHERE idTarefa = '$id'");
						while ($dados = mysql_fetch_array($consulta)){

							$sit = $dados['situacao'];
							$titulo = $dados['titulo'];
							$descricao = $dados['descricao'];
							$data = $dados['dataNecessaria'];
						}
								?>
				<div class="col-md-6">
					<form role="form" method="post" action="../controller.php?acao=add_resp" enctype="multipart/form-data">
						<div class="form-group">
							<input class="form-control" name="idtarefa" value="<?php echo $id; ?>" type="hidden">
							<label>Titulo</label>
							<input class="form-control" name="titulo" value="<?php echo $titulo; ?>" placeholder="Ex: Colocar Piso Apto2005"disabled>
						</div>
						<div class="form-group">
							<label>Data Prevista</label>
							<input class="form-control" value="<?php echo $data; ?>" name="dataP" type="date"disabled>
						</div>
						<div class="form-group">
							<label>Descrição</label>
							<textarea class="form-control" name="descricao"disabled><?php echo $descricao; ?></textarea>
						</div>
						<div class="form-group">
							<label>Responsável</label>
							<select name="resp" class="form-control">
						<?php
						$consulta = mysql_query("SELECT idUsuario, usuario, tipo FROM usuarios WHERE tipo = 'COLAB'");
						while ($dados = mysql_fetch_array($consulta)){ ?>
							<option value="<?php echo $dados['idUsuario']; ?>"><?php echo $dados['usuario']; ?></option>
						<?php } ?>
							</select>
						</div>
						<input type="submit" class="btn btn-primary" value="Adicionar">
						<button type="reset" class="btn btn-default">Reset</button>

					</form>
				</div>

			</div>
		</div>

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


</body>
</html>