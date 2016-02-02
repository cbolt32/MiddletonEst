<!doctype html>
<html lang="en">
	<head>
		<?php include_once 'includes/helpers.inc.php'; ?>
		<?php include 'components/php/header.inc.php' ;?>

	</head>

	<body class="body" id="searchPage">



		<div class="pageHead">
			<?php include 'components/php/pageHead.inc.php' ;?>
		</div>
<?php function cbOutput ($data)
{
	if ( $data != NULL)
	{
		return $data ;
	}
};  ?>
		<div class="container">
<!--			<div class="mainContent">-->
<!--				<div class="row">-->
					<div class="col-md-12">
<!--todo uncomment these for full production site-->
						<?php include 'components/php/snippet-searchFilter.php';?>
<!--					--><?php //include'components/php/snippet-searchResults.php' ;?>

<!--					</div>-->
<!--				</div>-->
<!--				><div class="row">-->
<!--				-->
<!--				</div-->
			</div>
		</div>


		<footer class="footer">

			<?php include 'components/php/footer.inc.php' ;?>

		</footer>


	</body>
</html>