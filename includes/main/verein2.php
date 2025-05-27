<?php
require("../config.inc.php");
require("../common.inc.php");

?>
<!doctype html>
<html lang="de">

<head>
	<title>Verein2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/basic.css">
	<link rel="stylesheet" href="../../css/grid.css">
	<link rel="stylesheet" href="../../css/ProjektVogelzählung2.css">
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400..700;1,400..700&display=swap"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
	<script src="../../js/jquery-3.7.1.min.js"></script>
	<script src="../../js/ProjektVogelzählung2.js"></script>
</head>

	<?php 	include ('../navigationLogin.php');
			include ('../header.php');
	?>

<main>
<section class="eingeblendet Verein">
		<div class="grid">
			<h2 class="col-xl-12 col-lg-12 col-md-12 col-sm-12">Unser Verein stellt sich vor:</h2>
			<p class="col-xl-12 col-lg-12 col-md-12 col-sm-12">Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Est quo voluptas nemo odit! Impedit, aliquid?
				Praesentium veniam cupiditate possimus eos qui, amet laboriosam nobis magni,
				illum, eaque aperiam! Incidunt eius dolor eligendi vero fugiat illum deleniti earum vitae tempora minus
				aliquid minima ullam magni nulla architecto, necessitatibus dolores veritatis molestiae quia doloremque
				rerum repellendus. Veniam ducimus explicabo doloribus, commodi voluptatem beatae libero quasi eum
				asperiores
				nihil quod obcaecati omnis illo praesentium. Accusantium sint adipisci consequatur laudantium deserunt
				maxime odio hic,
				praesentium velit. Eum debitis dolores fugit dolorem corporis, sint, tenetur explicabo veritatis
				asperiores
				vel, tempora sequi dolorum tempore quia alias.</p>
			<h2 class="col-xl-12 col-lg-12 col-md-12 col-sm-12">Einloggen oder unserem Verein beitreten:</h2>
			<?php 	include ('login.php');
			?>
		</div>

	</section>
</main>
</html>