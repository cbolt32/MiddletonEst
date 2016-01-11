<div class="col-lg-12 col-md-offset-1 col-md-12 col-sm-12  col-sm-offset-1   searchMain">

	<form class="buyingSearchForm form-horizontal" method="post" action="/search/">

<!--		Both Required for auto population of location select menu -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/search/index.php';?>
<!--		--><?php //include $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';?>
		<fieldset id="buyingSearchFieldset">
			<legend>Find Your New Home</legend>
			<div class="row">

					<div class="input-group">

						<label class="areaSelect" id="areaSelect" for="areaSelect">Choose Area(s)</label></br></br>


						<select name="areaSelect[]" id="areaSelect" class="selectpicker"
						        data-selected-text-format="count"  data-actions-box="true" data-toggle="dropdown" class="selectpicker"
						        multiple data-selected-text-format="count"  >
							<option value="any">Any</option>
							<?php foreach($areaSelects as $areaSelect): ?>
								<option value="<?php htmlout( $areaSelect['available']);?>"><?php htmlout(
											$areaSelect['available'])
									;?></option>
							<?php endforeach; ?>
						</select>

					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->

<!--			--><?php

//			$doc = new DOMDocument();
//			$doc->preserveWhiteSpace = false;
//
//			$doc->load("includes/vebra/test.xml");
//			$root = $doc->documentElement;
//
//			$Branches = $root->getElementsByTagName('branches');
//
//
//			echo '<ul>';
//			foreach ($Branches as $Branch) {
//				echo '<li>' . htmlentities($Branch->nodeValue) . '</li>';
//			}
//			echo '<ul>';
//			?>


			<div class="col-lg-2 form-group">

			      <!--Bedroom number dropdown-->

			<label for="bedsSelect">Min Number of Bedrooms</label></br>
			<select name="numOfBedSelect" id="numOfBedSelect" class="selectpicker"
			        data-selected-text-format="count"  data-actions-box="true">
				<option value="any">Any</option>
				<option value="Studio">Studio</option>
				<option value="1 Bedroom">1 Bedroom</option>
				<option value="2 Bedroom">2 Bedrooms</option>
				<option value="3 Bedroom">3 Bedrooms</option>
				<option value="4 Bedroom">4 Bedrooms</option>
				<option value="5 Bedroom">5 Bedrooms</option>
				<option value="6 Bedroom">6 Bedrooms</option>
			</select>
			</br>
			</div>
			<div class="col-lg-2 form-group">
			      <!--Property Type dropdown-->
			<label for="propTypeSelect">Property Type</label></br>
			<select name="propertyTypesSelect[]" id="propertyTypesSelect" data-toggle="dropdown" class="selectpicker"
			        multiple data-selected-text-format="count"  >
				<!--				<option value="Any">Any</option>-->
				<!--				<option value="All">All</option>-->
				<option value="Bungalow">Bungalow</option>
				<option value="Cottage">Cottage</option>
				<option value="Detached">Detached</option>
				<option value="End of terrace">End of terrace</option>
				<option value="Flat">Flat</option>
				<option value="Terrace">Terrace</option>
				<option value="Semi-Detached">Semi-Detached</option>
			</select>
			</br>
</div>
			<div class="col-lg-2 form-group">

			      <!--Min Value Type dropdown-->
			<label for="minValSelect" control-label">Minimum Value</label></br>
			<select name="minValueSelect" id="minValueSelect" data-toggle="dropdown" class="selectpicker">
				<!--			        multiple data-selected-text-format="count" multiple data-actions-box="true">-->
				<option value="No Minimum">No Minimum</option>
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
			</br>
</div>
			<div class="col-lg-2 form-group">
			      <!--Max Value Type dropdown-->
			<label for="maxValSelect" control-label">Maximum Value</label></br>
			<select name="maxValueSelect" id="maxValueSelect" data-toggle="dropdown" class="selectpicker">
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
				<option value="£4,000,000orMore">£4,000,000 ro More</option>

			</select>
</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="input-group">
                        <span class="input-group-btn" >
                            <button class="btn btn-default buySearchSubmit" type="submit">Search!</button>
                        </span>
					</div>
				</div>
			</div>
			</div><!-- /.row -->
		</fieldset>
	</form>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/php/snippet-searchResults.php' ?>
<!--
	<div class="col-lg-10 col-md-offset-1 col-md-10 col-sm-10  col-sm-offset-1  buySubView"
	     xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

		<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=n43%206jb&key=AIzaSyC1HYmeM8ttyaAaHU7wnhJxbI5UeIKby_o" allowfullscreen></iframe>
				<title>Places Searchbox</title>

				<input id="pac-input" class="controls" type="text" placeholder="Search Box">
						<div id="map"></div>
						<script>
	// This example adds a search box to a map, using the Google Place Autocomplete
	// feature. People can enter geographical searches. The search box will return a
	// pick list containing a mix of places and predicted search terms.

						function initAutocomplete() {
							var map = new google.maps.Map(document.getElementById('map'), {
								center: {lat: -33.8688, lng: 151.2195},
								zoom: 13,
								mapTypeId: google.maps.MapTypeId.ROADMAP
							});

							// Create the search box and link it to the UI element.
							var input = document.getElementById('pac-input');
							var searchBox = new google.maps.places.SearchBox(input);
							map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

							// Bias the SearchBox results towards current map's viewport.
							map.addListener('bounds_changed', function() {
								searchBox.setBounds(map.getBounds());
							});

							var markers = [];
							// [START region_getplaces]
							// Listen for the event fired when the user selects a prediction and retrieve
							// more details for that place.
							searchBox.addListener('places_changed', function() {
								var places = searchBox.getPlaces();

								if (places.length == 0) {
									return;
								}

								// Clear out the old markers.
								markers.forEach(function(marker) {
									marker.setMap(null);
								});
								markers = [];

								// For each place, get the icon, name and location.
								var bounds = new google.maps.LatLngBounds();
								places.forEach(function(place) {
									var icon = {
										url: place.icon,
										size: new google.maps.Size(71, 71),
										origin: new google.maps.Point(0, 0),
										anchor: new google.maps.Point(17, 34),
										scaledSize: new google.maps.Size(25, 25)
									};

									// Create a marker for each place.
									markers.push(new google.maps.Marker({
										map: map,
										icon: icon,
										title: place.name,
										position: place.geometry.location
									}));

									if (place.geometry.viewport) {
										// Only geocodes have viewport.
										bounds.union(place.geometry.viewport);
									} else {
										bounds.extend(place.geometry.location);
									}
								});
								map.fitBounds(bounds);
							});
							// [END region_getplaces]
						}


		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1HYmeM8ttyaAaHU7wnhJxbI5UeIKby_o&libraries=places&callback=initAutocomplete" async defer></script>
		</div>
			-->