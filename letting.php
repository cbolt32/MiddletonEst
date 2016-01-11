<!doctype html>
<html lang="en">
	<head>
		<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/header.inc.php' ;?>

	</head>

	<body class="body" id="lettingPage">

		<div class="pageHead">
			<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/pageHead.inc.php' ;?>
		</div>
		<div class="container">
			<div class="mainContent">
				<div class="row">
					<div class="col-md-12">
						<div id="searchBarContainer" style="margin-top: 500px;">

							<div id="searchBar">
								<form id="propertySearchList" method="get" action="http://www.bensiggins.co.uk/properties/resultofsearch.php">
									<!-- Radio buttons -->
									<table width="960" cellpadding="0" cellspacing="0" border="0">
										<tr>
											<td class="fontSelect">Include SSTC?</td><td id="searchBarAvailableCheck" style="padding-right:10px;"><input type="checkbox" name="available" value="false" onclick="availableOrNot()" /></td>
											<td class="fontSelect" align="left" valign="middle" width="30">Buy</td>
											<td id="buying" class="fontSelect" align="right" valign="middle"><input class="radioButton" type="radio" name="buyorrent" value="buy" checked="checked" align="bottom" onclick="changeToBuy();" /></td>
											<td class="fontSelect" align="left" valign="middle" width="30">Rent</td>
											<td class="fontSelect" align="right" valign="middle"><input class="radioButton" type="radio" name="buyorrent" value="rent" align="bottom" onclick="changeToRent();" /></td>
											<td valign="middle"><input id="PropertySearchTextAreaWidth" type="text" name="roadNameOrPostcode" placeholder="Area,road name or postcode" /></td>
											<!-- Drop down menu -->

											<td valign="middle"><select name="propertyType" id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Property Type</option>
													<option value="">Any</option>
													<option value="terrace">Terrace</option>
													<option value="semi">Semi-detached</option>
													<option value="detached">Detached</option>
													<option value="house">Houses</option>
													<option value="flat">Flats</option>
													<option value="apartment">Apartments</option>
													<option value="bungalow">Bungalows</option>
												</select></td>
											<!-- bedrooms -->
											<td valign="middle"><select name="numberOfBedrooms" id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Bedrooms</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5+</option>
												</select></td>
											<!-- Minimum price -->
											<td valign="middle"><select name="minimumValue" id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Minimum Price</option>
													<option value="nomin">No Minimum</option>
													<option value="50000">&pound;50,000</option>
													<option value="60000">&pound;60,000</option>
													<option value="70000">&pound;70,000</option>
													<option value="80000">&pound;80,000</option>
													<option value="90000">&pound;90,000</option>
													<option value="100000">&pound;100,000</option>
													<option value="150000">&pound;150,000</option>
													<option value="200000">&pound;200,000</option>
													<option value="250000">&pound;250,000</option>
												</select></td>
											<!-- Maximum -->
											<td valign="middle"><select name='maximumValue' id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Maximum Price</option>
													<option value="nomax">No Maximum</option>
													<option value="100000">&pound;100,000</option>
													<option value="150000">&pound;150,000</option>
													<option value="200000">&pound;200,000</option>
													<option value="250000">&pound;250,000</option>
													<option value="300000">&pound;300,000</option>
													<option value="350000">&pound;350,000</option>
													<option value="400000">&pound;400,000</option>
													<option value="500000">&pound;500,000</option>
													<option value="1000000">1M</option>
												</select></td>
											<td width="60"><input id="valuationSubmitButton2" type="image" src="http://www.bensiggins.co.uk/pictures/blankbutton.png" width="60" height="26" alt="Submit Button" name="submit2" value="Search" /></td>
										</tr>
									</table>

								</form>

							</div> <!-- searchBar  -->


							<div id="searchBarRent">
								<form id="propertySearchList" method="get" action="http://www.bensiggins.co.uk/properties/resultofsearch.php">
									<!-- Radio buttons -->
									<table width="960" cellpadding="0" cellspacing="0" border="0">
										<tr>
											<td class="fontSelect">Include SSTC?</td><td id="searchBarAvailableCheckRent" style="padding-right:10px;"><input type="checkbox" name="available"  value="true" onclick="availableOrNot()">
											<td class="fontSelect" align="left" valign="middle" width="30">Buy</td>
											<td class="fontSelect" align="right" valign="middle"><input class="radioButton" type="radio" name="buyorrent" value="buy" align="bottom" onclick="changeToBuy();"></td>
											<td class="fontSelect" align="left" valign="middle" width="30">Rent</td>
											<td id="renting" class="fontSelect" align="right" valign="middle"><input class="radioButton" type="radio" name="buyorrent" value="rent" checked="checked" align="bottom" onclick="changeToRent();"></td>

											<td valign="middle"><input id="PropertySearchTextAreaWidth" type="text" name="roadNameOrPostcode" placeholder="Area,road name or postcode"></td>
											<!-- Drop down menu -->

											<td valign="middle"><select name="propertyType" id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Property Type</option>
													<option value="">Any</option>
													<option value="terrace">Terrace</option>
													<option value="semi">Semi-detached</option>
													<option value="detached">Detached</option>
													<option value="house">Houses</option>
													<option value="flat">Flats</option>
													<option value="apartment">Apartments</option>
													<option value="bungalow">Bungalows</option>
												</select></td>
											<!-- bedrooms -->
											<td valign="middle"><select name="numberOfBedrooms" id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Bedrooms</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5+</option>
												</select></td>
											<!-- Minimum price -->
											<td valign="middle"><select name="minimumValue" id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Minimum Price</option>
													<option value="nomin">No Minimum</option>
													<option value="400">&pound;400</option>
													<option value="500">&pound;500</option>
													<option value="600">&pound;600</option>
													<option value="700">&pound;700</option>
													<option value="800">&pound;800</option>
													<option value="900">&pound;900</option>
													<option value="1000">&pound;1,000</option>
													<option value="1100">&pound;1,100</option>
													<option value="1200">&pound;1,200</option>
												</select></td>
											<!-- Maximum -->
											<td valign="middle"><select name='maximumValue' id="textAreaForPropertySearch">
													<option value="" disabled selected="selected">Maximum Price</option>
													<option value="nomax">No Maximum</option>
													<option value="700">&pound;700</option>
													<option value="800">&pound;800</option>
													<option value="900">&pound;900</option>
													<option value="1000">&pound;1,000</option>
													<option value="1200">&pound;1,200</option>
													<option value="1300">&pound;1,300</option>
													<option value="1400">&pound;1,400</option>
													<option value="1600">&pound;1,600</option>
													<option value="2000">&pound;2,000</option>
												</select></td>
											<td width="60"><input id="valuationSubmitButton2" type="image" src="http://www.bensiggins.co.uk/pictures/blankbutton.png" width="60" height="26" alt="Submit Button" name="submit2" value="Search" /></td>
										</tr>
									</table>

								</form>

							</div> <!-- searchBarRent  -->

						</div> <!-- searchBarContainer -->


					</div>
				</div>
			</div>
		</div>


		<footer class="footer">

			<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/footer.inc.php' ;?>

		</footer>



	</body>
</html>