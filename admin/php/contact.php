<?php

if(session_status() == PHP_SESSION_NONE)
	session_start();

//if user attemps to access this page without fist logging in
if(!isset($_SESSION['id'])) {
	$_SESSION['error_msg'] = "Please log in first to continue";
	header("Location: login.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Markdown Editor</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="../../vendor/Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../vendor/SimpleMDE/dist/simplemde.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">

		<link rel="stylesheet" href="../css/topbar.css" />
		<link rel="stylesheet" href="../css/sidebar.css" />
		<link rel="stylesheet" href="../css/contact.css" />
		<link rel="stylesheet" href="../css/notif.css" />
	</head>
	<body>
		<?php
			require_once "topbar.php";
			require_once "sidebar.php";
		?>
		<div id="content-wrapper">
			<label for="contact-content" id="title">CONTACT US</label>
			<form>
				<div id="contact-container">
					<textarea id="contact-content" hidden></textarea>
					<div id="options">
						<button class="btn btn-danger" type="submit">Cancel</button>
						<button class="btn btn-success" type="button" onclick="update()">Update</button>
						<div style="clear: both"></div>
					</div>
				</div>
			</form>
		</div>

		<div class="notif" id="notif-container">
			<div class="notif-img">
				<img id="notif-img" />
			</div>
			<div class="notif-content" id="notif-content"></div>
		</div>

		<script src="../../vendor/jQuery/jquery-3.2.1.min.js"></script>
		<script src="../../vendor/Bootstrap/js/bootstrap.min.js"></script>
		<script src="../../vendor/SimpleMDE/dist/simplemde.min.js"></script>
		<script src="../js/contact.js"></script>
		<script src="../js/sidebar.js"></script>
	</body>
</html>