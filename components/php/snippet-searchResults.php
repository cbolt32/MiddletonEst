<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  searchResults">
	<!--	--><?php //include $_SERVER['DOCUMENT_ROOT'] . '/components/php/snippet-AllRows.php' ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php' ?>


	<div class="mb20">
		<!--		<p class="pull-right"><a href="?">New search</a> / <a href="../">Return to Search home</a></p>-->
		<h2>Properties</h2>

		<!--		--><?php
		//		//creates pagination display
		$paginate->paginglink( $query, $records_per_page );
		//		?>

	</div>


	<?php

	$paginate->dataview( $newquery );


	?>
	<div class="mb20">

<!--		echo '<span class="pull-right">' . $paginate->paginglink($query,$records_per_page) . '</span>';-->
<!--		// ?>-->

	</div>
</div>










