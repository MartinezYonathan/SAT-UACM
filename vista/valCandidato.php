<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SAT-UACM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/styleMain.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="./js/CandidatoVista.js"></script>
	</head>
	<body>
		<div id="page-wrapper">
                        <div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<header id="header">
								<h1><a href="index.php" id="logo">SAT-UACM</a></h1>
								<nav id="nav">
									<a href="index.php">INICIO</a>
									<a href="agregarCandi.php">AGREGAR CANDIDATO</a>
									<a href="agregarAsesor.php">AGREGAR ASESOR</a>
									<a href="valCandidato.php"  class="current-page-item">VALIDAR CANDIDATO</a>
									<a href="sminarios.php">SEMINARIOS</a>
								</nav>
							</header>

						</div>
					</div>
				</div>
			</div>

			<div id="main">
			<div class="container">
					<div class="row main-row">
						<div class="12u">

							<section id="infoSeccion">
								<h2>ver candidato</h2>
                                                                <div id="info" class="cuadro">
                                                                    <table id="datos">
                                                                        <tr><td id="foto"></td></tr>
                                                                        <tr><td id="Nombre"></td></tr>
                                                                        <tr><td id="matricula"></td></tr>
                                                                        <tr><td id="carrera"></td></tr>
                                                                        <tr><td id="creditos"></td></tr>
                                                                        <tr><td id="cartaCompromiso"></td></tr>
                                                                        <tr><td id="cartaMotivos"></td></tr>
                                                                        <tr><td id="controls"></td></tr>
                                                                    </table>
                                                                </div> 
                                                                <input type="submit" id="boton"> 
                                                                
							</section>

						</div>
					</div>
			</div>
	</div>

	<div class="row">
						<div class="12u">

							<div id="copyright">
								&copy; UACM. Todos los derechos reservados. | Diseo: <a href="#">MABYCODE</a>
							</div>

						</div>
					</div>
	</body>
</html>