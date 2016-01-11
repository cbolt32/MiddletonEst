<div class="col-lg-8 col-md-offset-1 col-md-8 col-sm-8  col-sm-offset-1 col-xs-8  searchResults"
     xmlns="http://www.w3.org/1999/html">


	<hgroup class="mb20">
		<h1>Search Results</h1>
	</hgroup>
	<section class="searchResultsAll">

		<?php



		?>

		<div class="searchResultItems" id="propSearchResults"> <!-- Prop Details -->
			<div class="resultsRow">
				<div class="resultImg">
					<img class="img-responsive pull-left" src="http://placehold.it/350x200" alt="">

				</div>
				<div class="searchBlurb ">
					<h1>Search Results</h1>
					<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php'; ?>


					<?php if (isset($properties)): ?>
						<table>
							<tr><th>Joke Text</th><th>Options</th></tr>
							<?php foreach ($properties as $property): ?>
								<tr>
									<p>num of beds is</p>
									<?php htmlout($property['beds']); ?>


								</tr>
							<?php endforeach; ?>
						</table>
					<?php endif; ?>
					<p><a href="?">New search</a></p>
					<p><a href="../">Return to JMS home</a></p>


					<p>num of beds is</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eposition : relative;position :
					   relative;position : relatinive;position : relative;position : relative;position :
					   relative;position
					   : relative;position : relative;position : relative;
					</p>

				</div>
			</div>
		</div>

	</section>
<?php


?>
</div>


