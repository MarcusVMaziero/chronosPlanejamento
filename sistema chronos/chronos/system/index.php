<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chronos Planejamento - Dashboard</title>
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
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-building color-blue"></em>
							<div class="large">5</div>
							<div class="text-muted">Obras Cadastradas</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">62</div>
							<div class="text-muted">Usuários</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-yellow panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-list color-yellow"></em>
							<div class="large">13</div>
							<div class="text-muted">Tarefas Em Andamento</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-list color-teal"></em>
							<div class="large">36</div>
							<div class="text-muted">Tarefas Concluidas</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!--/.row-->
</div>	<!--/.main-->
<div class="col-sm-3 col-sm-offset-4 col-lg-4 col-lg-offset-2 main">

	<div class="panel panel-default">
		<div class="panel-heading">Tarefa</div>
		<div class="panel-body">
			<div class="col-md-6">
				<form role="form" method="post" action="../controller.php?acao=add_tarefas" enctype="multipart/form-data">
					<div class="form-group">
						<label>Titulo : Aplicar Rejunte</label>
					</div>
					<div class="form-group">
						<label>Data Prevista : 01/12/2018 *</label>
					</div>
					<div class="form-group">
						<label>Descrição</label>
						<textarea class="form-control" style="min-width: 350px;" name="descricao" disabled="">Aplicar o rejunte junto a todo o ambiente</textarea>
					</div>
					<div class="form-group">

						<input type="submit" class="btn btn-success" value="Aceitar">

					</form>
				</div>

			</div>
		</div>

	</div><!--/.row-->
	
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