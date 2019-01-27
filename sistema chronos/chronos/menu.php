		<?php include ('../controller.php');
		include('session.php');
		?>
		<nav class="navbar navbar-custom navbar-fixed-top" style="background-color: #fff;" role="navigation" style="">
			<div class="navbar-header">
				<img src="../img/logo.png" width="200" style="margin:3px;">
			</div>
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="profile-sidebar">
				<div class="profile-usertitle">
					<div class="profile-usertitle-status"> Bem vindo !! <?php echo $nome; ?></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
			<form role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>
			<?php if( $nivel == "MASTER"){ ?>
				<ul class="nav menu">
					<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
					<li><a href="obras.php"><em class="fa fa-building">&nbsp;</em>Obras</a></li>
					<li><a href="colaboradores.php"><em class="fa fa-user">&nbsp;</em> Colaboradores</a></li>
					<li><a href="tarefas.php"><em class="fa fa-list">&nbsp;</em> Tarefas</a></li>
					<li><a href="tarefas.php"><em class="fa fa-users">&nbsp;</em> Times</a></li>
					<!--<li><a href="tarefas.php"><em class="fa fa-landmark">&nbsp;</em> Empresas</a></li>-->
					<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
				</ul>
			<?php } ?>
			<?php if( $nivel == "ENG"){ ?>
				<ul class="nav menu">
					<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
					<li><a href="obras.php"><em class="fa fa-building">&nbsp;</em>Obras</a></li>
					<li><a href="tarefas.php"><em class="fa fa-list">&nbsp;</em> Tarefas</a></li>
					<!--<li><a href="tarefas.php"><em class="fa fa-landmark">&nbsp;</em> Empresas</a></li>-->
					<li><a href="../controller.php?acao=sair_sistema"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
				</ul>
			<?php } ?>
	</div><!--/.sidebar-->