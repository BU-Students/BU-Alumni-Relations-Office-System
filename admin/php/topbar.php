<nav class="navbar navbar-fixed-top navbar-inverse" id="topbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span id="active-page" class="navbar-brand"></span>
		</div>
		<div id="navbar-content" class="navbar-collapse collapse">
			<ul class="nav navbar-nav" id="topnav-items">
				<li><a href="dashboard.php">Dashboard</a></li>
				<?php if($_SESSION['admin-type'] == 1) echo('<li><a href="administrators.php">Administrators</a></li>'); ?>
				<!--<li><a href="stories.php">Stories</a></li>-->
				<?php if($_SESSION['admin-type'] == 1) echo('<!--<li><a href="events.php">Events</a></li>-->'); ?>
				<li class="nav-divider"></li>
			</ul>
			<ul class="nav navbar-nav navbar-right" id="topbar-right">
				<!--<li id="editor-tab"><a href="editor.php">Editor</a></li>-->
				<li><a href="profile.php">
					<?php
						/* assuming backend/connection.php is included from pages that includes this file,
						 * a session has been established, and the query is correct
						 */
						require_once 'backend/connection.php';
						$result = $conn->query("SELECT first_name, MID(middle_name, 1, 1) AS mi, last_name FROM admin WHERE admin_id = ".$_SESSION['id']);
						$row = $result->fetch_assoc();
						echo $row['first_name'].' '.$row['mi'].'. '.$row['last_name'];
					?>
				</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">&ensp;<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Setings</li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="account.php">Account</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Logout</a></li>
<!--					<li class="divider"></li>
						<li class="dropdown-header">Meta</li>
						<li><a href="#">Feedback</a></li>
-->					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>