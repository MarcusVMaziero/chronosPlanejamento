<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chronos Planejamento - Adicionar Tarefas</title>
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
				<li class="active">Tarefas</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-default">
			<div class="panel-heading">Adicionar Tarefas</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" method="post" action="../controller.php?acao=add_tarefas" enctype="multipart/form-data">
						<div class="form-group">
							<label>Titulo</label>
							<input class="form-control" name="titulo" placeholder="Ex: Colocar Piso Apto2005">
						</div>
						<div class="form-group">
							<label>Data Prevista</label>
							<input class="form-control" name="dataP" type="date">
						</div>
						<div class="form-group">
							<label>Descrição</label>
							<textarea class="form-control" name="descricao"></textarea>
						</div>
						<input type="submit" class="btn btn-primary" value="Salvar">
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