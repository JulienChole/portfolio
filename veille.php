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
  				<a id="titre"><b>Ma <p1>Veille Technologique</p1></b></a>
  			</div>

  			<div class="veille1">
  				<h2><b>Nvidia</b></h2>
  					<div>
  						<p>
  							Nvidia à récemment présenté les nouvelles technologies qu'ils ont développé ppour les associer à la toute dernière gamme de leur GPU : <b><p1>RTX series 30</p1></b>.
  						</p>
  					</div>
  					<div>
  						<p>
							Etant le leader du marché, Nvidia a développé diverses technologies pouvant améliorer le rendu de l'image de façon significative en rendant plus puissant leur GPU et en y ajoutant les technologies du <b><p1>Ray Tracing</p1></b> et le <b><p1>DLSS (2.0)</p1></b> par exemple. Toutes ces technologies prouvent qu'aujourd'hui, ces avancées concernent surtout la technologie visuelle et graphique.
  						</p>
  					</div>
  					<div>
  						<p>
  							Tout d'abord le <b><p1>Ray Tracing</p1></b>, est une méthode de calcul d'optique qui se base sur un rendu d'image, par l'illumination, et qui va produire le parcours inverse de la lumière c'est à dire la réfléxion et la réfraction de celle-ci. Le Ray Tracing consiste à émettre un premier rayon lumineux depuis "la caméra" vers chaque pixel de l'image, puis ce même rayon est dévié par un objet et un point d'impact est identifié. De nouveaux rayons sont alors simulé en direction de chaque autres sources lumineuse : cela permet de comprendere si l'élément est écalairé ou au contraire caché dans l'ombre. la couleur définitive du pixel est défini en ajoutant des paramètres liés à la surface de l'objet : la brillance par exemple, et au trajet : l'angle / la transparence. Tout cela demande évidemment une puissance de calcul beaucoup plus élvée que des GPU traditionnels.
  						</p>
  					</div>
  					<div>
  						<p>
							Le <b><p1>DLSS</p1></b>, <b><p1>D</p1></b>eep <b><p1>L</p1></b>earning <b><p1>S</p1></b>uper <b><p1>S</p1></b>ample, est une technologie qui fait intervenir l’Intelligence Artificielle pour améliorer la qualité d’une image, afin de bénéficier d’une fréquence d’images plus élevé et d’un rendu améliorer pour les jeux vidéo mais aussi pour les personnes faisant du graphisme et autres métiers du visuel. L’idée c’est que votre carte graphique calcul un rendu d’image inférieure à ce qu’elle peut réellement produire mais c’est l’IA qui complète les données manquantes pour finalement créer une image ou une vidéo d’une qualité bien supérieure. Une version 2.0 est récemment sortie et le DLSS est devenu encore meilleur ce qui permet également de soulager le processeur qui peut parfois être surexploité. Le DLSS et DLSS 2.0 se combinent parfaitement avec le Ray Tracing, vu ci-dessus.
  						</p>
  					</div>
  					<div>
  						<p>
  							Grâce à cette nouvelle gamme de GPU Nvidia, il est également possible de traiter et générer des images ou des vidéos en <b><p1>8K</p1></b>, ce qui est une progression considérable dans le domaine du visuel.
  						</p>
  					</div>
  			</div>

  		</div>

  	</div>

</body>
</html>