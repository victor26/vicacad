<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Skitter - Slideshow for anytime!</title>
	
	<link href="css/styles.css" type="text/css" media="all" rel="stylesheet" />

	<!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	
	<!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	
	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: true, 
				dots: true, 
				preview: true
			});
		});
	</script>
</head>
<body>
	
		
	
			<div class="border_box">
				<div class="box_skitter box_skitter_large">
					<ul>
						<li><a href=""><img src="images/example/cad.gif" class="circles" /></a><div class="label_text"><p>Cadastre-se</p></div></li>
						<li><a href="#cubeRandom"><img src="images/example/eva.gif" class="circlesInside" /></a><div class="label_text"><p>Junte-se a nós</p></div></li>
						<li><a href="#block"><img src="images/example/antesdepois.gif" class="circlesRotate" /></a><div class="label_text"><p>Antes e Depois</p></div></li>
						<li><a href="#cubeStop"><img src="images/example/004.jpg" class="cubeShow" /></a><div class="label_text"><p>cubeStop</p></div></li>	
					</ul>
				</div>
			
		</div>

	</div>
</body>
</html>