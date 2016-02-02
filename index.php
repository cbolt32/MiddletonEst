<!doctype html>
<html lang="en">
	<head>

		<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/header.inc.php' ;?>

	</head>

	<body class="body" id="homePage">

		<div class="pageHead">
			<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/pageHead.inc.php' ;?>
		</div>
		<div class="container">
			<div class="mainContent">
				<div class="row">
					<div class="col-md-12">
						<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/snippet-welcome.php' ;?>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- Row of info portals -->
			<div class="row infoPorts">
				<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/infoPortals.inc.php' ;?>
			</div>
		</div>
		<div class="container">
			<!-- Row of info portals -->
			<div class="row">
				<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/infoPortalAbout.inc.php' ;?>
			</div>
		</div>

		<footer class="footer">

			<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/footer.inc.php' ;?>

		</footer>



	</body>
</html>

