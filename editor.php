<!DOCTYPE html>
<html lang="en">

<?php 
$title = " | My folders";
include('includes/head.php');
$url = $_SERVER['REQUEST_URI'];
?>
<body class="editor allbody">
	<?php include('includes/header.php') ?>
	
	<div class="container pb-5">
		<div class="mini-container">
			<div class="mini-menu mini-menu-folders">
				<div class="d-flex jcsb pt-3 pb-3">
					<div onclick="back_to_main()" class="link back_fix">< Back</div>
					<h3>Lorem name</h3>
					<div onclick="autosaves()" class="link autosaves">AutoSave every 1 min</div>
				</div>
			</div>
		</div>

		<div class="mini-container">
			<div class="work-space">
				<textarea></textarea>
			</div>

			<div class="tools_responsive">	
				<img src="img/tools_contoll.svg" class="tools-controller t-c-up" status="open">
				<div class="tools">
					<div class="d-flex jcsb">
						<div class="aligment">
							<img src="img/al_center.svg">
							<img src="img/al_left.svg">
							<img src="img/al_right.svg">
						</div>
						<div class="line_90"></div>
						<div class="headlines">
							<img src="img/h_h1.svg">
							<img src="img/h_h2.svg">
							<img src="img/h_h3.svg">
						</div>
						<div class="line_90"></div>
						<div class="textTransform">
							<img src="img/tt_b.svg">
							<img src="img/tt_r.svg">
							<img src="img/tt_t.svg">
							<img src="img/tt_u.svg">
						</div>
						<div class="line_90"></div>
						<div class="lists">
							<img src="img/lists.svg">
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<?php include('includes/footer.php') ?>	
	<?php include('includes/script.php') ?>
	<script src="js/editor.js"></script>
</body>
</html>