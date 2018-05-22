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
			  .gallery_item {

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
		<nav class="menu">
			<menu class="menu__list">
				<li class="menu__list-item"><a href="main.php" class="menu__list-link">Главная</a></li>
				<li class="menu__list-item"><a href="item_2.php" class="menu__list-link">Галерея постеров</a></li>
				<li class="menu__list-item"><a href="item_3.php" class="menu__list-link">Лидеры кинопроката сегодня</a></li>
				<li class="menu__list-item" id="current"><a href="item_4.php" class="menu__list-link">Отправить отзыв</a></li>
			</menu>
		</nav>
		<h2>Отправить отзыв редактору сайта</h2>
		<div id="wrapper">
			<div id="leftcol">
				<form action="add.php" method="post">
					<input type="text" placeholder="Имя" id="name" name="nameUser"><br/>
					<input type="text" placeholder="Email" id="email" name="emailUser"><br/>
					<textarea name="messageUser" id="message" placeholder="Введите сообщение"></textarea><br/>
					<div id="messageShow"></div>
					<input type="submit" name="done" id="done" value="Отправить">
				</form>
			</div>
		</div>
	</body>
</html>