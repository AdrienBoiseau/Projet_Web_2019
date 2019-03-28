<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Liste d'objets insolites</title>
	<meta charset="UTF-8" />
</head>
<div class="view_object">
	<h1 class="title_object">
		<?php echo '<a href=?id=' . $weirdObject->getId(). '>' . $weirdObject->getName() . ', ' . $weirdObject->getDescription();

		?>
	</h1>
	<h2 class="price_object"><?php echo $weirdObject->getPrice() ?>€</h2>
	<img src=<?php echo $weirdObject->getImage() ?> />
    <?php
    echo '</a>';
    echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
    ?>
</div>
</html>
