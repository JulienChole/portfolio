<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>&emsp;PortFolio</title>
	<link rel="stylesheet" type="text/css" href="site.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="sidenav.js"></script>
	<script src="navbar.js"></script>
	<link rel="icon" href="quill.ico">


</head>
<body>

	<div id="page">

		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index.php">Présentation</a>
			<a href="parcours.php">Parcours</a>
  			<a href="competence.php">Compétences</a>
  			<a href="veille.php">Veille</a>
  			<a href="index.php#cv">Contact</a>
  		</div>

  		<div id="main">

  			<div id="navbar">
  				<a id="logo">Enzo Murru</a>
  					<div id="navbar-left">
  						<span style="font-size: 35px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
  					</div>
  			</div>


  			<div id="parcours">
  				<a id="titre"><b><p1>Présentation</p1></b></a>
  			</div>


  			<div id="intro">
  				<h2 style="font-size: 40px;"><b>A Propos</b></h2>

  			  		<div class="detail">
  						<p><b>Nom :</b> Murru</p>
  						<p><b>Prénom :</b> Enzo</p>
  						<p><b>Age :</b> 21</p>
  						<p><b>Lieux :</b> Lyon</p>
  						<p><b>Aspirations :</b> Développeur WEB / Applications</p>
  					</div>
  			</div>


  			<div id="bts">
  				<h2 style="font-size: 40px;"><b>BTS SIO</b></h2>
  				<h3 style="font-size: 25px;"><b>Option SLAM</b></h3>
  				<div>
  					<p>
  						Le <p1><b>B</b></p1>revet de <p1><b>T</b></p1>echnicien <p1><b>S</b></p1>upérieur des <p1><b>S</b></p1>ervices <p1><b>I</b></p1>nformatiques aux <p1><b>O</b></p1>rganisations, est un BTS d'avenir que les étudiants passionés d'informatique affectionnent particulièrement.
  					</p>
  					<p>Cette formation se poursuis sur deux annnées à la fin desquelles l'on peut être actif sur le marché du travail ou bien continuer dans un cursus encore supérieur à celui-ci.
  					</p>
  				</div>
  				<div>
  					<p>
  						L'option <p1><b>SLAM</b></p1> consiste à se spécialiser dans le développement de logiciels et applications dans laquelle l'on apprend différents langages de programmation tel que l'HTML, le CSS, le C# et bien plus encore, ainsi que le langage de Base De Données.
  					</p>
  					<p>
  						C'est donc vers cette option que je me suis dirigé afin de touver ma voie.
  					</p>
  				</div>
  			</div>


  			<div id="cv">
  				<h2 style="font-size: 40px;"><b>Contact</b></h2>
  				<h3 style="font-size: 25px;"><b>Me conctater :</b></h3>
  				<p>
  					<b>E-Mail</b> : enzo.murru05@gmail.com
  				</p>
  				<p>
  					<b>Téléphone</b> : 07 77 75 13 45
  				</p>

  				<br>

  				<a href="Last-CV-DEV.pdf" type="application/pdf" target="_blank"><button class="button">Aperçu du CV</button></a>
  				<a href="Last-CV-DEV.pdf" download="Last-CV-DEV"><button class="button2">Télécharger CV</button></a>
  			</div>
  		</div>
  	</div>
</body>
</html>