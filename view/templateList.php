<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Liste d'objets insolites</title>
	<meta charset="UTF-8" />
</head>
<body> 
	<h1><?php echo $weirdObject->getName() ?> ○ <?php echo $weirdObject->getDescription() ?></h1> 
	<h2><?php echo $weirdObject->getPrice() ?>€</h2>
	<img src=<?php echo $weirdObject->getImage() ?> />
</body>
</html>
