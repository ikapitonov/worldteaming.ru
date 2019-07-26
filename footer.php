<link rel="stylesheet" type="text/css" href="static/Header/footer.css">
<footer>
	<div class="Fo_wrapper">
		<ul>
			<li class="Fo_item_li">
				<a href="startup-1" class="Fo_item_a">Страница проекта</a>
				<a href="index.php" class="Fo_item_a Fo_item_a_leftS">Главная</a>
			</li>
			<li id="Fo_born">
				<div class="Fo_txt_div">Основан 3 июня 2019</div>
			</li>
			<li class="Fo_item_li">
				<div class="Fo_txt_div" style="margin-right: 20px;">Бета версия</div>
				<a href="index.php" id="Footer_logotip"><span>Главная</span><img src="static/img/logotipBottom.svg" alt="Главная"></a>
			</li>
		</ul>
	</div>
</footer>
</div>
<?php if (!empty($_SESSION['auth']) || $_SESSION['auth']) {  ?>
	<link rel="stylesheet" type="text/css" href="static/main/newMess.css">
	<script type="text/javascript" src="static/main/newMess.js"></script>
<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>