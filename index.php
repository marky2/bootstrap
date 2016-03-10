<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">MARKI</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">TOP</a></li>
						<li><a href="#">PREMIOS</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="BUSCAR">
						</div>
						<button type="submit" class="btn btn-default">BUSCAR</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">SUGERIDOS</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">CAMISAS</a></li>
								<li><a href="#">POLOS</a></li>
								<li><a href="#">SHORT</a></li>
								<li><a href="#">ZAPATILLAS</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		</div>
		<!-- CAROUSEL -->
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img data-src="public/imagenes/1.jpg"  width="1200" alt="First slide" src="public/imagenes/1.jpg">
					
				</div>
				<div class="item">
					<img data-src="public/imagenes/2.jpg" width="1200" alt="80" src="public/imagenes/2.jpg" >
					
				</div>
				<div class="item active">
					<img data-src="public/imagenes/3.jpg"  width="1200" alt="Third slide" src="public/imagenes/3.jpg">
					
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

		</div>
	



	<script src="public/js/jquery-1.12.1.js"></script>
	<script src="public/js/bootstrap.js"></script>
</body>
</html>