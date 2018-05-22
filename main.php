<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title>Главная</title>
		<style type="text/css">
			@media (max-width: 900px) and (min-width: 561px) {
			  .col {
			    width: 50%;
			  }
			}

			@media (max-width: 560px) and (min-width: 370px) {
			  .col {
			    width: 100%;
			  }
			  .menu__list-link {
			    font-size: 14px;
			    padding: 5px;
			    width: 84%;
			  }
			  .menu {
			    width: 102%;
			    padding: 3px;
			  }
			  p {
			    width: 100%;
			  }
			}
			@media (max-width: 369px) {
			  .col {
			    width: 109%;
			  }
			  .menu__list-link {
			    font-size: 12px;
			    padding: 5px;
			    width: 84%;
			}
			  .menu {
			    width: 109%;
			    padding: 0;
			}
			  p {
			    width: 109%;
			  }
			}
	</style>
	</head>
	<body>
		<?php
			global $mysqli;
        	$mysqli = new mysqli("localhost", "anastasya0409", "", "lab2DB");
        	$query = "SELECT * FROM news";
        	$mysqli->query("SET NAMES 'utf8'");
        	$result = $mysqli->query($query);
		?>
		<nav class="menu">
			<menu class="menu__list">
				<li class="menu__list-item" id="current"><a href="main.php" class="menu__list-link">Главная</a></li>
				<li class="menu__list-item"><a href="item_2.php" class="menu__list-link">Галерея постеров</a></li>
				<li class="menu__list-item"><a href="item_3.php" class="menu__list-link">Лидеры кинопроката сегодня</a></li>
				<li class="menu__list-item"><a href="item_4.php" class="menu__list-link">Отправить отзыв</a></li>
			</menu>
		</nav>
		<h1>Главная</h1>
		<p>Главные материалы этого месяца (статьи, репортажи, новости и многое другое).</p>
		<div>
			<?php while($row = $result->fetch_array(MYSQLI_ASSOC)) {
			?>
		<div class="col">
			<div>
				<img src=<?php echo $row["image"]?>></img>
				<div class="col-text">
					<div><?php echo $row["introText"]?>
					<a href=<?php echo $row["link"]?>>подробнее...</a>
					</div>
				</div>
			</div>
		</div>
		<?php }
		?>
		</div>
	<?php
        $mysqli->close();
	?>
	</body>
</html>
