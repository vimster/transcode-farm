<?php

/*

	THE FARM
		cyle gage, emerson college, 2012

*/

$login_required = false;
require_once('../www-includes/login_check.php');

?>
<?php
$page_title = 'The Open Transcoding Farm';
require_once('pagepieces/head.php');
?>
</head>
<body>

	<div class="container" id="index-page">

<?php 
$where_are_we = 'index';
require_once('pagepieces/header.php');
?>

		<!-- start unique page content -->
		
		<div class="row">
			<div class="twelve columns">
				<?php
				
				// if logged in, show user's pending/completed stuff here
				
				?>
				<p><a href="/farming.php">Public Farm Status Page</a></p>
				<?php if ($current_user['userlevel'] == 1) { ?><p><a href="/admin/farming.php">Admin Farm Status Page</a></p><?php } ?>
				<?php if ($current_user['loggedin'] == true) { ?><p><a href="/upload/">Upload Videos!</a></p><?php } ?>
			</div>
		</div>
		
		<!-- end unique page content -->
	
<?php require_once('pagepieces/footer.php'); ?>
	
	</div>

<?php require_once('pagepieces/foot.php'); ?>

</body>
</html>