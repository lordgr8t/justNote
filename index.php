<!DOCTYPE html>
<html lang="en">

<?php 
$title = " | Welcome";
include('includes/head.php');
$url = $_SERVER['REQUEST_URI'];
if ($url == "/?signup") {
	$showhide = "<script>$('.signin').hide();</script>";
}else{
	$showhide = "<script>$('.signin').show();</script>";
	$showhide = "<script>$('.signup').hide();</script>";
}
?>
<body class="welcome">
	<?php include('includes/header.php') ?>
	<div class="signin">
		<div class="tac">
			<img src="img/logo100.png" class="logo">
		</div>
		<div class="langpicker d-flex jcsb m0-a mt-4 mb-4">
			<div onclick="en()" class="w-lang en active">EN</div>
			<div onclick="ru()" class="w-lang ru">RU</div>
		</div>
		<div class="log-input pos-r">
			<input type="text" placeholder="login" name="login">
			<div class="log-next pos-a">
				<img src="img/next.svg">
			</div>
		</div>
		<div class="pass-input pos-r">
			<input type="text" placeholder="password" name="pass">
			<div class="log-next pos-a">
				<img src="img/next.svg">
			</div>
		</div>
		<div class="noacc link tac mt-3" onclick="open_sup()">Not have  an  accaunt?</div>
	</div>

	<div class="bluer_bg dn animate__animated"></div>
	<div class="signup tac dn animate__animated">
		<div class="close pointer">
			<img onclick="close_sup()" src="img/close.svg">
		</div>
		<h1 class="tac mt-3 mb-5">Create account</h1>
		<input class="mb-3" type="text" placeholder="login"><br>
		<input class="mb-3" type="text" placeholder="mail"><br>
		<input class="mb-3" type="text" placeholder="password"><br>
		<input class="mb-5" type="text" placeholder="accept password"><br>
		<div class="checker-sup">
			<div>I agree with <a href="#">Privacy Policy</a>, <a href="#">Cookie Policy</a> and <a href="#">Terms of Use</a>.</div>
			<input class="checkbox" type="checkbox">
		</div>
		<div class="link mt-3">Create account</div>
	</div>

	<?php include('includes/footer.php') ?>	
	<?php include('includes/script.php') ?>
	<script src="js/login.js"></script>
</body>
</html>