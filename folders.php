<!DOCTYPE html>
<html lang="en">

<?php 
$title = " | My folders";
include('includes/head.php');
$url = $_SERVER['REQUEST_URI'];
?>
<body class="folders">
	<?php include('includes/header.php') ?>
	
	<header>
		<div class="d-flex jcsb">
			<a href="/" class="header-logo d-flex jcsb aic">
				<img src="img/logo100.png">
				<div>Just note</div>
			</a>
			<div class="header-search pos-r">
				<input type="text" placeholder="Search">
				<img src="img/search.svg" class="search-button pos-a">
			</div>
			<div class="header-menu">
				<img src="img/h-lang.svg">
				<img src="img/h-quest.svg">
				<img src="img/h-user.svg">				
			</div>
			<img onclick="open_b()" class="burger-menu-btn dn" src="img/menu.svg">
		</div>
		<div class="burger-menu">
			<div class="b-logo d-flex aic">
				<img src="img/logo100.png">
				<div class="ml-2">Just note</div>
			</div>
			<hr>
			<div class="b-search pos-r">
				<input type="text" placeholder="Search">
				<img src="img/search.svg" class="search-button pos-a">
			</div>
			<hr>
			<div class="b-lang d-flex jcsb m0-a">
				<a href="#" onclick="en()" class="active en">EN</a>
				<a href="#" onclick="ru()" class=" ru">RU</a>
			</div>
			<hr>
			<div class="b-qust">
				<a href="#">Take a qustion</a>
			</div>
			<hr>
			<div class="b-user">
				<a href="#">User</a>
			</div>
			<hr>
			<div class="tac">
				<img onclick="close_b()" src="img/close.svg">
			</div>
			<hr>
		</div>
	</header>

	<?php include('includes/footer.php') ?>	
	<?php include('includes/script.php') ?>
	<script src="js/folders.js"></script>
</body>
</html>