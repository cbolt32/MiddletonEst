<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 searchFilter" xmlns="http://www.w3.org/1999/html">

	<form class="buyingSearchForm form-horizontal" id="buyingSearchForm" method="get" action="">

		<!--		Required for auto population of location select menu -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/search/index.php'; ?>

		<fieldset id="buyingSearchFieldset">
			<legend>
				<h2>Find Your New Home<div class="fb-like pull-right" data-href="https://www.facebook.com/middletonestatesshoreham/" data-layout="button_count" data-action="recommend" data-show-faces="true" data-share="true">
					</div>
				</h2>
				</legend>

			<!--Buy or Rent Select dropdown-->
			<div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6 " id="searchDD">
				<label for="buyRent">Purchase/Let</label></br>
				<select name="buyRent" id="buyRent" class="searchDD selectpicker btn-group-xs "
				        data-selected-text-format="count" data-actions-box="true">
					<option value="buy">Buy</option>
					<option value="rent">Rent</option>
				</select>
			</div><!--formgroup-->

			<div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6" id="searchDD">
				<label for="areaSelect">Area</label></br>
				<select name="areaSelect[]" id="areaSelect" class="searchDD btn-group-xs  selectpicker"
				        data-selected-text-format="count" data-actions-box="true" data-toggle="dropdown"
				         id="searchDD"
				        multiple data-selected-text-format="count">
					<option value="">Any</option>

<!--					Creates otions for dropdown based on current locations in database-->
					<?php foreach ( $areaSelects as $areaSelect ): ?>
						<option value="<?php htmlout( $areaSelect['available'] ); ?>"><?php htmlout( $areaSelect['available'] ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</div><!--formgroup-->


			      <!--Bedroom number dropdown-->
			<div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6 col-xs-offset-1 " id="searchDD">
				<label id="numOfBedSelect" for="numOfBedSelect">Min Bedrooms</label id="searchLB"></br>
				<select name="numOfBedSelect" id="numOfBedSelect" class="selectpicker btn-group-xs  searchDD"
				        data-selected-text-format="count" data-actions-box="true">
					<option value="">Any</option>
					<option value="Studio">Studio</option>
					<option value="1Bedroom">1 Bedroom</option>
					<option value="2Bedroom">2 Bedrooms</option>
					<option value="3Bedroom">3 Bedrooms</option>
					<option value="4Bedroom">4 Bedrooms</option>
					<option value="5Bedroom">5 Bedrooms</option>
					<option value="6Bedroom">6 Bedrooms</option>
				</select>
			</div><!--formgroup-->

			      <!--Property Type dropdown-->
			<div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6 " id="searchDD">
				<label id="searchLB" for="propertyTypesSelect">Type</label id="searchLB"></br>
				<select name="propertyTypesSelect[]" id="propertyTypesSelect" data-toggle="dropdown"
				        data-selected-text-format="count" data-actions-box="true" data-toggle="dropdown"
				        class="selectpicker btn-group-xs searchDD"
				        multiple data-selected-text-format="count">
<!--									<option value="">Any</option>-->
					<!--				<option value="All">All</option>-->
					<option value="Bungalow">Bungalow</option>
					<option value="Cottage">Cottage</option>
					<option value="Detached">Detached</option>
					<option value="End of terrace">End of terrace</option>
					<option value="Flat">Flat</option>
					<option value="Terrace">Terrace</option>
					<option value="Semi-Detached">Semi-Detached</option>
				</select>
			</div><!--formgroup-->


			      <!--Min Value Type dropdown-->
			<div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6 " id="searchDD">
				<label id="searchLB" for="minValSelect">Min Value</label id="searchLB"></br>
				<select name="minValueSelect" id="minValueSelect" data-toggle="dropdown" class="searchDD btn-group-xs  selectpicker"
				        ">
					<!--			        multiple data-selected-text-format="count" multiple data-actions-box="true">-->
					<option value="">No Minimum</option>
					<option value="£200,000orless">£200,000 or less</option>
					<option value="£225,000">£225,000</option>
					<option value="£250,000">£250,000</option>
					<option value="£275,000">£275,000</option>
					<option value="£300,000">£300,000</option>
					<option value="£350,000">£350,000</option>
					<option value="£400,000">£400,000</option>
					<option value="£450,000">£450,000</option>
					<option value="£500,000">£500,000</option>
					<option value="£750,000">£750,000</option>
					<option value="£1,000,000">£1,000,000</option>
					<option value="£2,000,000">£2,000,000</option>
					<option value="£4,000,000">£4,000,000</option>

				</select>
			</div><!--formgroup-->

			<div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6 " id="searchDD">
				<!--Max Value Type dropdown-->
				<label id="searchLB" for="maxValueSelect">Max Value</label id="searchLB"></br>
				<select name="maxValueSelect" id="maxValueSelect" data-toggle="dropdown"
				        class="selectpicker btn-group-xs  input-small searchDD">
					<option value="No Maximum">No Maximum</option>
					<option value="£200,000orless">£200,000</option>
					<option value="£225,000">£225,000</option>
					<option value="£250,000">£250,000</option>
					<option value="£275,000">£275,000</option>
					<option value="£300,000">£300,000</option>
					<option value="£350,000">£350,000</option>
					<option value="£400,000">£400,000</option>
					<option value="£450,000">£450,000</option>
					<option value="£500,000">£500,000</option>
					<option value="£750,000">£750,000</option>
					<option value="£1,000,000">£1,000,000</option>
					<option value="£2,000,000">£2,000,000</option>
					<option value="£4,000,000orMore">£4,000,000 or More</option>

				</select>
			</div><!--formgroup-->
</br>
			<div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default buySearchSubmit btn-group-xs " name="action" type="submit" value="search">Search!</button>
                        </span>
			</div>

</fieldset>
</form>

</div>
<?php //include $_SERVER['DOCUMENT_ROOT'] . '/components/php/snippet-searchResults.php' ?>

