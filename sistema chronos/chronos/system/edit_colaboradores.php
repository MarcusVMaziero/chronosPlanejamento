<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chronos Planejamento - Editar Colaboradores</title>
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
				<li class="active">Colaboradores</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-default">
			<div class="panel-heading">Editar Colaborador</div>
			<div class="panel-body">
				<div class="col-md-6">
					<?php 
						$id = $_GET['id'];
						$consulta = mysql_query("SELECT * FROM usuarios WHERE idUsuario = '$id'");
						while ($dados = mysql_fetch_array($consulta)){ 

							$nome = $dados['usuario'];
							$mail = $dados['email'];
							$tipo = $dados['tipo'];

						}?>
					<form role="form" method="post" action="../controller.php?acao=edit_colaboradores" enctype="multipart/form-data">
						<div class="form-group">,
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<label>Nome</label>
							<input class="form-control" name="nome" value="<?php echo $nome; ?>" placeholder="Ex: José da Silva">
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" name="email" value="<?php echo $mail; ?>" class="form-control" placeholder=" Ex: jose.silva@gmail.com">
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="foto">
						</div>
					
					

						<div class="form-group">
							<label>Tipo</label>
							<select name="tipo" class="form-control">
								<option value="<?php echo $tipo; ?>"><?php echo $tipo; ?></option>
								<option value="MESTRE">Mestre de Obras</option>
								<option value="COLAB">Colaborador</option>
								 <option value="ADMIN">Administrador</option>
								 <option value="ENG">Engenheiro</option>
								
							</select>
						</div>
						<input type="submit" class="btn btn-primary" value="Atualizar">
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