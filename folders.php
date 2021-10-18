<!DOCTYPE html>
<html lang="en">

<?php 
$title = " | My folders";
include('includes/head.php');
$url = $_SERVER['REQUEST_URI'];
?>
<body class="folders allbody">
	<?php include('includes/header.php') ?>
	
	<div class="container pb-5">
		<div class="mini-container">
			<div class="mini-menu mini-menu-folders">
				<div class="d-flex jcsb pt-3 pb-3">
					<div class="appender">
						<div onclick="c_note()" class="link m-c-note">Create note</div>
					</div>
					<div class="link m-c-folder">Create folder</div>
					<div class="link m-c-edit">Edit</div>
				</div>
			</div>
		</div>

		<div class="case-grid">					
			<?php include('test.php') ?>
		</div>
	</div>

	<div class="bluer_bg"></div>

	<div class="create-popup create-note">
		<h3 class="tac">Create new note</h3>
		<input class="mt-3 mb-3" type="text" placeholder="name">
		<h3 class="mb-3">Place in:</h3>
		<?php include('test.php') ?>
		<div class="create-menu d-flex jcsb">
			<div class="cancel">Cancel</div>
			<div class="ok">Ok</div>
		</div>
	</div>

	<div class="create-popup create-folder">
		<h3 class="tac">Create new folder</h3>
		<input class="mt-3 mb-3" type="text" placeholder="name">
		<h3 class="mb-3">Color:</h3>
		<div class="pick-folder-color d-flex jcsb">
			<div class="pick-folder-color-color red"></div>
			<div class="pick-folder-color-color orange"></div>
			<div class="pick-folder-color-color yellow"></div>
			<div class="pick-folder-color-color green"></div>
			<div class="pick-folder-color-color cyan"></div>
			<div class="pick-folder-color-color blue"></div>
			<div class="pick-folder-color-color purple"></div>
		</div>
		<div class="create-menu d-flex jcsb">
			<div class="cancel">Cancel</div>
			<div class="ok">Ok</div>
		</div>
	</div>

	<div class="create-popup accept-delete dn">
		<h3 class="tac">Delete "f_name"?</h3>	
		<div class="create-menu d-flex jcsb">
			<div class="cancel">No</div>
			<div class="ok">Yes</div>
		</div>
	</div>





	<div class="folder-edit dn"></div>


	<?php include('includes/footer.php') ?>	
	<?php include('includes/script.php') ?>
	<script src="js/folders.js"></script>
</body>
</html>