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
<body>
	<?php include('includes/header.php') ?>


	<?php include('includes/footer.php') ?>	
	<?php include('includes/script.php') ?>
	<script src="js/login.js"></script>
</body>
</html>