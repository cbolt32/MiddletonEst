<!doctype html>
<html lang="en">
	<head>
		<?php include_once $_SERVER['DOCUMENT_ROOT'] .
		                   '/includes/helpers.inc.php'; ?>
		<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/header.inc.php' ;?>

	</head>

	<body class="body" id="testimonialPage">

		<div class="pageHead">
			<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/pageHead.inc.php' ;?>
		</div>
		<span class="darkness" >
		<div class="container">
			<div class="mainContent">
				<div class="row">
					<div class="col-md-12">

						<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/snippet-searchFilter.php';?>


					</div>
				</div>
			</div>
		</div>

</span>
		<footer class="footer">

			<?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/footer.inc.php' ;?>

		</footer>




	</body>
</html>


		<script>
			if (expires == null || expires == "")
			{
				var expires = new Date();
			}

			var availableChecked = false;

		</script>

		<div id="cookieNoticeContainer">
			<div id="cookieNotice">
    <span style="float:left;">
bensiggins.co.uk uses cookies to improve your online experience. &nbsp; &nbsp;<a href="http://www.bensiggins.co.uk/cookies/cookies.php" target="_self">Find out more about cookies</a>.
</span>
<span style="float: right;">
    <a href="#" onclick="check(); return false">Close</a>
</span>
			</div> <!-- cookieNotice-->
		</div> <!-- cookieNoticeContainer -->

		<script>
			//if (document.cookie != "cookie=Warning")
			//alert(document.cookie.indexOf("cookieWarning"));
			if (document.cookie.indexOf("cookieWarning") != -1)
			{
				//alert("Cookie exists");
				//alert("Cookie doesn't exist");
				document.getElementById('cookieNoticeContainer').style.display = 'none';
			}
			else
			{
				//alert("cookie doesn't exist");
				document.getElementById('cookieNoticeContainer').style.display = 'block';
			}
		</script>

		<div id="logoBar">
			<div id="bannerContainerLogo"><a href="http://www.bensiggins.co.uk/" target="_self"><img src="http://www.bensiggins.co.uk/pictures/bensigginstext.png" width="100%" height="100%" border="0" title="Company name: Ben Siggins Estate Agents Maidstone.  Telephone Number: 01622 524110" alt="Ben Siggins Estate Agents Maidstone" /></a></div>
			<!-- bannerContainerLogo -->
			<div id="salesAndLettings">
				Sales and Lettings
			</div> <!-- salesAndLettings -->
			<div id="bannerContainerEstateAgentLogo"><img src="http://www.bensiggins.co.uk/pictures/bensigginsestateagenttext.png" width="184" height="43" title="Ben Siggins Estate Agents Maidstone" alt="Ben Siggins Estate Agents Maidstone" /> </div>
			<!-- bannerContainerEstateAgentLogo -->
			<div class="phoneIcon">
				<img onclick="revealNumbers()" src="http://www.bensiggins.co.uk/pictures/phoneIcon.png" width="50" height="50" alt="Phone logo" />
			</div> <!-- phoneIcon -->
			<div class="bannerContainerTelephoneMaidstone">
				Maidstone - <a href="tel:01622524110">01622 524110</a>
			</div> <!-- bannerContainerTelephoneMaistone -->
			<div class="bannerContainerTelephoneGillingham">
				Gillingham - <a href="tel:01634757070">01634 757070</a>
			</div> <!-- bannerContainerTelephoneGillingham -->
		</div> <!-- phoneNumbersContainer -->
		</div> <!-- logoBar -->

		<div id="logoBarSlideDown">
			<div id="bannerContainerLogo"><a href="http://www.bensiggins.co.uk/" target="_self"><img src="http://www.bensiggins.co.uk/pictures/bensigginstext.png" width="239" height="55" border="0" title="Company name: Ben Siggins Estate Agents Maidstone.  Telephone Number: 01622 524110" alt="Ben Siggins Estate Agents Maidstone" /></a></div>
			<!-- bannerContainerLogo -->
			<div id="salesAndLettings">
				Sales and Lettings
			</div> <!-- salesAndLettings -->
			<div id="bannerContainerEstateAgentLogo"><img src="http://www.bensiggins.co.uk/pictures/bensigginsestateagenttext.png" width="184" height="43" title="Ben Siggins Estate Agents Maidstone" alt="Ben Siggins Estate Agents Maidstone" /> </div>
			<!-- bannerContainerEstateAgentLogo -->
			<div class="phoneIcon">
				<img onclick="revealNumbers()" src="http://www.bensiggins.co.uk/pictures/phoneIcon.png" width="50" height="50" alt="Phone logo" />
			</div> <!-- phoneIcon -->
			<div class="bannerContainerTelephoneMaidstone">
				Maidstone - <a href="tel:01622524110">01622 524110</a>
			</div> <!-- bannerContainerTelephoneMaistone -->
			<div class="bannerContainerTelephoneGillingham">
				Gillingham - <a href="tel:01634757070">01634 757070</a>
			</div> <!-- bannerContainerTelephoneGillingham -->
		</div> <!-- logoBarSlideDown -->

		<div id="menuWrapper">
			<div id="menu">
				<ul>
					<li><a id="aboutus" href="http://www.bensiggins.co.uk/aboutus/aboutus.php" target="_self" onclick="loadText('aboutus')"; return false;>About</a></li>
					<li><a id="myBlog" href="http://www.bensiggins.co.uk/myblog/myblog.php" target="_self" onclick="loadText('myBlog')"; return false;>Blog</a></li>
					<li><a id="testimonials" href="http://www.bensiggins.co.uk/testimonials/testimonials.php" target="_self" onclick="loadText('testimonials')"; return false;>Testimonials</a></li>
					<li><a id="contact" href="http://www.bensiggins.co.uk/contactus/contactus.php" target="_self" onclick="loadText('contact')"; return false;>Contact</a></li>
					<li><a id="localarea" href="http://www.bensiggins.co.uk/localarea/localarea.php" target="_self" onclick="loadText('localarea')"; return false;>Local area</a></li>
					<li><a id="freevaluation" href="http://www.bensiggins.co.uk/valuation/freevaluation.php" target="_self" onclick="loadText('freevaluation')"; return false;>Free valuation</a></li>
					<li class="currentlySelected">Properties</li>
					<li><a id="home" href="http://www.bensiggins.co.uk/index.php" target="_self" onclick="loadText('home')"; return false;>Home</a></li>        </ul>




			</div> <!-- menu -->


			       <!--   <div id="socialContainer">-->

			<div id="seePropertiesFirst">
				See properties first on
			</div> <!-- seePropertiesFirst -->
			<div id="googlePlus">
				<a href="https://plus.google.com/104761877241449199528" rel="publisher" target="_blank"><img src="http://www.bensiggins.co.uk/pictures/googleplus.png" width="41" height="50" border="0" /></a>
			</div> <!-- googlePlus -->
			<div id="facebook">
				<a href="https://www.facebook.com/bensigginsestateagents" target="_blank"><img src="http://www.bensiggins.co.uk/pictures/facebookicon.png" width="41" height="50" border="0" /></a>
			</div> <!-- facebook -->
			<div id="twitter">
				<a href="https://twitter.com/BenSigginsEA" target="_blank"><img src="http://www.bensiggins.co.uk/pictures/twitterlogo.png" width="41" height="50" border="0" alt="Follow @BenSigginsEA" title="Follow @BenSigginsEA" /></a>
			</div> <!-- twitter -->
			       <!--</div> <!-- socialContainer -->

		</div> <!-- menuWrapper -->


		<div id="searchBarContainer">

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

		<script>

			function loadText(passedInText)
			{
				document.getElementById(passedInText).innerHTML = "loading...";
			}

			var mainPage = ;

			if(mainPage == true)
			{
				document.getElementById("searchBarContainer").style.display = "none";
			}

		</script>
		<div id="main">
			<div id="headerContentWrapper">
				<div id="alignProperties">

					<!-- <div itemscope="" itemtype="http://schema.org/Residence">-->





					<div id="propertyTitleContainer">

						<div id="goBack">
							<a href="www.bensiggins.co.uk/test/properties/properties.php" onClick="history.back();return false;">Go back</a>
						</div> <!-- goBack -->
						<br />
						<h1 class="title" itemprop="name">Hatherall Road, Maidstone</h1>

						       <!-- CODE STILL TO DO -->


						<div id="googlePlusShare">



							<a href="https://plus.google.com/share?url=http://www.bensiggins.co.uk/properties/result.php?id=25778454" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><img
										src="pictures/gplussharebutton.png" width="61" height="21" alt="Share on Google+" border="0" /></a>


						</div>
						       <!-- googlePlusShare -->

						<div id="facebookShare">

						</div> <!-- facebookShare -->


						       <!-- END OF CODE STILL LEFT TO DO -->

						<br />
						<div id="pInterest">

							<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.bensiggins.co.uk&media=http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/QWmO_DfBJkG9M3EOxg8qZA.jpg&description=Ben%20Siggins%20Estate%20Agent%20Property%20for Sale%20%2D%20Hatherall Road, Maidstone" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>



						</div>	<!-- pInterest -->
					</div> <!-- properptyTitleContainer -->



					<div id="gallery">



						<!--	<td width="780" height="518" valign="bottom">-->
						<div id="amazingslider-1" style="display:block;position:relative;margin:0 0 0 0;">
							<ul class="amazingslider-slides" style="display:none;">
								<li><img itemprop="primaryImageOfPage" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/QWmO_DfBJkG9M3EOxg8qZA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-6.jpg" /></li><div itemscope="" itemtype="http://schema.org/Residence">
									<li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/RpUCweACk0GJ688xbob3xw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-13.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/Gnnc0bgGHECPfa4-GmNRXA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-24.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/fFM3OIehCUq4is3IVt-vKA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-2.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/CXLxoEcUwUm9fFR1Kn5fMQ.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-3.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/1RO6mHIV-UKngcHc3W5tPA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-4.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/qcwlA5hnMEekWRw2J1rfHA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-5.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/QLH_1Amr-UGbFa4Pasa1ng.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-7.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/lrDEn41FW068Pt_H71Wm6g.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-8.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/GGrdYOcHGEemcSkmzLnkpw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-9.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/L3n_TE-ax0iu08sJ2kXwyQ.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-10.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/E6GnGazzk0-CsI-OpXHR1w.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-11.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/7cHkweo2jkOTwTcWES9UWg.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-12.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/zP5quoJDw0qGXz25v4qP9w.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-14.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/6UI2cvTcLUelxYj-aHtL2A.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-15.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/9BALKgXNFESIJe8V8Gdwcg.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-16.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/Z3ICqx9uX0OVBryrio9w9A.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-17.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/EhDj9fLIqkuqJbnk11KsCA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-18.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/YqjKydSOCkq-YuTUyxSWAg.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-19.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/pA0HcHcxO0CYIbG_i1Y1Fw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-20.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/X-qrCePolkmbFWXFb3ahXw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-21.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/a5M9dd4DNkmHKC61c_zZow.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-22.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/uF_zpUjTNEG8B__rA1OcEw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-23.jpg" /></li><li><img itemprop="photo" src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/Nr9ZsWWWQ06eCKrxKbv96g.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF.jpg" /></li>
								</div>
							</ul>

							<ul class="amazingslider-thumbnails" style="display:none;">
								<li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/QWmO_DfBJkG9M3EOxg8qZA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-6.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/RpUCweACk0GJ688xbob3xw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-13.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/Gnnc0bgGHECPfa4-GmNRXA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-24.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/fFM3OIehCUq4is3IVt-vKA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-2.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/CXLxoEcUwUm9fFR1Kn5fMQ.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-3.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/1RO6mHIV-UKngcHc3W5tPA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-4.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/qcwlA5hnMEekWRw2J1rfHA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-5.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/QLH_1Amr-UGbFa4Pasa1ng.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-7.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/lrDEn41FW068Pt_H71Wm6g.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-8.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/GGrdYOcHGEemcSkmzLnkpw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-9.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/L3n_TE-ax0iu08sJ2kXwyQ.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-10.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/E6GnGazzk0-CsI-OpXHR1w.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-11.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/7cHkweo2jkOTwTcWES9UWg.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-12.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/zP5quoJDw0qGXz25v4qP9w.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-14.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/6UI2cvTcLUelxYj-aHtL2A.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-15.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/9BALKgXNFESIJe8V8Gdwcg.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-16.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/Z3ICqx9uX0OVBryrio9w9A.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-17.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/EhDj9fLIqkuqJbnk11KsCA.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-18.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/YqjKydSOCkq-YuTUyxSWAg.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-19.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/pA0HcHcxO0CYIbG_i1Y1Fw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-20.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/X-qrCePolkmbFWXFb3ahXw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-21.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/a5M9dd4DNkmHKC61c_zZow.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-22.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/uF_zpUjTNEG8B__rA1OcEw.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF-23.jpg" /></li><li><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Photo/[3]/Nr9ZsWWWQ06eCKrxKbv96g.jpg" alt="Hatherall Road, Maidstone, Kent, ME14 5HF.jpg" /></li>


							</ul>
						</div><!--</td>--></a>









						<!--<img src="     " width="500" height="334" border="0" />-->


					</div> <!-- gallery -->


					<br />
					<b>Guide price</b><br />
					<b>&pound;500,000</b><br>			<p>

					</p>



					<div id="details">


						<table width="900" cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td align="center">Click image to enlarge</td>
							</tr>
							<tr>
								<td align="center"><a class="pic" href="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Floorplan/[3]/3cjijtaAdEyR6hNh8fP3mA.jpg"><img src="http://alto-live.s3.amazonaws.com/0yHW98z5i1FUDsnZM-IImK871x4/OMB9nrb1hcsuNjqo2DRDsbn8xyI/Floorplan/[3]/3cjijtaAdEyR6hNh8fP3mA.jpg" width="487" height="340" border="0" alt="Picture" /></a></td>
							</tr>

						</table>

					</div> <!-- details -->


					<div id="floorPlanTab">
						<table width="900" cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td align="center"><a class="slide" href="#">Floor plan</a></td>
							</tr>
						</table>
					</div> <!-- floorPlanTab -->


					<p>

					<ul>
						<li>Large rear garden</li><li>Approx 1800 Sq ft of accomodation</li><li>Four double bedrooms</li><li>Driveway</li><li>Close to town centre</li><li>Master with en suite</li><li>Converted bungalow</li><li>Garage</li>                </ul>

					</p>



					Full Description:
					</p>
					<p>
					<p><b>Summary - </b><span itemprop="description">GUIDE PRICE - &pound;500,000 - &pound;525,000 <br/><br/>This fabulous home has been excellently extended to provide a spacious home for any couple or family. The garden is beautifully landscaped with a large grass and patio area, with no overlooking properties and the benefit of an over ground pool.</span></p>



					<!-- Description -->

					<p><b>Description - </b>This fabulous home has been excellently extended to provide a spacious home for any couple or family. The property consists of entrance hall with access to the lounge; a sizeable room with a dual aspect window arrangement, one of which overlooks the front of the property. From here, there is further access to the dining room which also provides access to the kitchen/diner. The dining room once again provides ample space for a dining room table and is naturally well lit from the sliding doors out to the rear of the property providing beautiful views of the garden. The kitchen/diner provides a further space to dine, as well as ample storage units and surface space in immaculate condition with space for utilities including washing machine, drier, oven and fridge freezer. The kitchen also overlooks and provides access to the garden. The garden is beautifully landscaped with a large grass and patioed area, with no overlooking properties and the benefit of an over ground pool.<br/>From the kitchen there is access to the entrance hall which stretches to three bedrooms, bathroom and a separate W/C. All of the bedrooms are doubles and two of which have the advantage of fitted wardrobes. The bathroom is immaculately presented and has a bath with over bath shower.<br/>Finally, on the first floor resides the master bedroom; a well sized room with views of the garden and access to a walk in wardrobe through to an en suite. The en suite is of a modern decor with shower, toilet and sink creating a private sanctuary for the head of the house.<br/>This property also benefits from a driveway, front garden and garage. It is a truly wonderful property and viewing is highly recommended to fully appreciate what it has to offer.<br></p>







					<p><b>Situation - </b>Hatherall Road is situated in a popular residential location just 1.2 miles from Maidstone East main line train station and Maidstone High Street, with its wide range of shops, bars and restaurants. Maidstone is the county town of Kent and is perfectly situated in the heart of the county for easy access to London, the Kent coast, and beautiful countryside. It is a great place to live with leisure, shopping and entertainment all on the doorstep. It boasts excellent schools and good road and rail links. London is just an hour commute away while Ashford is 30 minutes. The town is ranked in the top five shopping centres in the south east and offers a wide range of leisure activities for all the family from canoeing and boating on the River Medway, great dining, a multiplex cinema, the Hazlitt Theatre, clubs and music venues in town, treasures at the Maidstone Museum and history at Leeds Castle. - <p><b>Entrance hall - </b><p><b>Lounge - </b><p><b>Dining room - </b><p><b>Bathroom - </b>7'9 x 7 (2.36m x 2.13m) </p><p><b>WC - </b>5'5 x 2'4 (1.65m x 0.71m) </p><p><b>Kitchen/diner - </b><p><b>Bedroom One - </b><p><b>En-Suite - </b>11'8 x 7'9 (3.56m x 2.36m) </p><p><b>Walk in wardrobe - </b>9'2 x 6'5 (2.79m x 1.96m) </p><p><b>Bedroom Two - </b><p><b>Bedroom Three - </b><p><b>Bedroom Four - </b>


					<div id="outerMapContainer">

						<!-- EPC Guide -->

						<div id="epc">
							<table width="180" cellpadding="0" cellspacing="0" border="0">
								<tr><td><img src="http://images.vebra.com/home/hip/EE_0275_069_081.png" width="180" height="160" alt="http://images.vebra.com/home/hip/EE_0275_069_081.png" /></td></tr>
								<tr><td><img src="http://images.vebra.com/home/hip/EI_0275_062_076.png" width="180" height="160" alt="http://images.vebra.com/home/hip/EI_0275_062_076.png" /></td></tr>
							</table>			</div> <!-- epc -->






						<div id="googleMapsContainerEPC">
							<div id="googleMapsEPC">
								<script>

									//Loading Google Maps
									function initialize() {

										var myLatlng = new google.maps.LatLng(51.28136, 0.533757);
										var mapOptions = {
											zoom: 15,
											center: myLatlng,
											mapTypeId: google.maps.MapTypeId.ROADMAP
										}
										var map = new google.maps.Map(document.getElementById('map-canvas-EPC'), mapOptions);

										var marker = new google.maps.Marker({
											position: myLatlng,
											map: map,
											title: 'Hatherall Road, Maidstone'
										});
									}

									google.maps.event.addDomListener(window, 'load', initialize);
								</script>




								<div id="map-canvas-EPC">

								</div>



							</div> <!-- googleMaps -->
						</div> <!-- googleMapsContainerEPC -->

					</div> <!-- outerMapContainer -->

					<!--     <script src="sliderengine/jquery.js"></script>
						<script src="sliderengine/amazingslider.js"></script>
						<script src="sliderengine/initslider-1.js"></script>-->
					</p>

					<!--</div>--> <!-- itemScope Thing -->
				</div> <!-- alignProperties -->
			</div> <!-- headerContentWrapper -->
		</div> <!-- main -->

		       <!--<div id="footerMenuContainer">
				   <div id="footerMenuInner">
				   Cookie Policy
				   </div> <!-- footerMenuInner -->


		       <!--</div> <!-- footerMenuContainer -->


		<div id="footerContainer">
			<div class="navFloatLeft">
				<span style="font-size:18px; font-weight:bold;">Navigation</span>
				<br />
				<a href="http://www.bensiggins.co.uk/index.php" target="_self">Home</a>
				<br />
				<a href="http://www.bensiggins.co.uk/properties/properties.php" target="_self">Properties</a>
				<br />
				<a href="http://www.bensiggins.co.uk/valuation/freevaluation.php" target="_self">Free Valuation</a>
				<br />
				<a href="http://www.bensiggins.co.uk/localarea/localarea.php" target="_self">Local area</a>
				<br />
				<a href="http://www.bensiggins.co.uk/contactus/contactus.php" target="_self">Contact</a>

			</div> <!-- navFloatLeft -->
			<div class="navFloatLeft">
				<br />
				<a href="http://www.bensiggins.co.uk/testimonials/testimonials.php" target="_self">Testimonials</a>
				<br />
				<a href="http://www.bensiggins.co.uk/myblog/myblog.php" target="_self">Blog</a>
				<br />
				<a href="http://www.bensiggins.co.uk/aboutus/aboutus.php" target="_self">About</a>
				<br />
				<a href="http://www.bensiggins.co.uk/guides/viewingaproperty.php">Viewing a property</a>
			</div> <!-- navFloatLeft -->
			<div class="navFloatLeft">
				<span style="font-size:18px; font-weight:bold">News</span>
				<br />
				<a href="http://www.bensiggins.co.uk/careers/careers.php" target="_self">Current vacancies</a>
			</div> <!-- navFloatLeft -->
			<div id="logoFloatRight">
				<img src="http://www.bensiggins.co.uk/pictures/Approved_Logo_rev_english.png" width="144" height="74" />
				<br />
				<a href="http://www.tpos.co.uk/" target="_blank"><img src="http://www.bensiggins.co.uk/pictures/BlackandWhiteGenericLogo.png" width="144" height="50" alt="Property Ombudsman Logo" border="0" /></a>
			</div> <!-- logoFloatRight -->
			<div id="footerTextContainer">
				<div id="footerText">
					Copyright (c) 2015&nbsp;&nbsp;&nbsp;<a href="http://www.bensiggins.co.uk" target="_self">www.bensiggins.co.uk</a>&nbsp;&nbsp;&nbsp;All rights reserved / Developed by J D Siggins
				</div> <!-- footerText -->
			</div> <!-- footerTextContainer -->

		</div> <!-- footerContainer -->



		       <!-- review display -->



		<script type="text/javascript">


		</script>


		<script type="text/javascript">

			//Code for search Bars
			var searchBar = document.getElementById("searchBar");
			var searchBarRent = document.getElementById("searchBarRent");
			var buying = document.getElementById("buying");
			var renting = document.getElementById("renting");
			var propAvailCheck = document.getElementById("propertiesAvailableCheckbox");
			var propAvailCheckRent = document.getElementById("propertiesAvailableCheckboxRent");
			var buyingTheMain = document.getElementById("buyingMain");
			var rentingTheMain = document.getElementById("rentingMain");
			var buyingTheMainRent = document.getElementById("buyingMainRent");
			var rentingTheMainRent = document.getElementById("rentingMainRent");
			var searchBarAvailableCheckVar = document.getElementById("searchBarAvailableCheck");
			var searchBarAvailableCheckRentVar = document.getElementById("searchBarAvailableCheckRent");

			function changeToRent()
			{
				buying.innerHTML = '<input class="radioButton" type="radio" name="buyorrent" value="buy" checked="checked" align="bottom" onclick="changeToBuy()" /><br>';
				searchBar.style.display = 'none';
				searchBarRent.style.display = 'block';
			}

			function changeToRentMainPage()
			{
				rentingTheMainRent.innerHTML = '<div id="rentingMainRent"><input class="radioButtonMain" type="radio" name="buyorrent" value="rent" checked="checked" align="bottom" /></div>';
				rentingTheMain.innerHTML = '<div id="rentingMain"><input class="radioButtonMain" type="radio" name="buyorrent" value="rent" checked="checked" align="bottom" /></div>';
				searchBar.style.display = 'none';
				searchBarRent.style.display = 'block';
				searchWrapperBuy.style.display = 'none';
				searchWrapperRent.style.display = 'block';
			}

			function changeToBuy()
			{
				renting.innerHTML = '<input class="radioButton" type="radio" name="buyorrent" value="rent" checked="checked" align="bottom" onclick="changeToRent()" />';
				searchBarRent.style.display = 'none';
				searchBar.style.display = 'block';
			}

			function changeToBuyMainPage()
			{
				buyingTheMain.innerHTML = '<div id="buyingMain"><input class="radioButtonMain" type="radio" name="buyorrent" value="buy" checked="checked" align="bottom" /></div>';
				buyingTheMainRent.innerHTML = '<div id="buyingMainRent"><input class="radioButtonMain" type="radio" name="buyorrent" value="buy" checked="checked" align="bottom" /></div>';
				searchBarRent.style.display = 'none';
				searchBar.style.display = 'block';
				searchWrapperRent.style.display = 'none';
				searchWrapperBuy.style.display = 'block';
			}

			function availableOrNot()
			{
				//alert("function called");
				if (availableChecked)
				{
					searchBarAvailableCheckVar.innerHTML =  '<td id="searchBarAvailableCheck" style="padding-right:10px;"><input type="checkbox" name="available" value="true" onclick="availableOrNot()" /></td>';
					searchBarAvailableCheckRentVar.innerHTML = '<td id="searchBarAvailableCheckRent" style="padding-right:10px;"><input type="checkbox" name="available" value="true" onclick="availableOrNot()" /></td>';
					//propAvailCheck.innerHTML = '<div id="propertiesAvailableCheckbox"><input id="checkBoxMainPage" type="checkbox" name="available" value="true" onclick="availableOrNot()" /></div>';
					//propAvailCheckRent.innerHTML = '<div id="propertiesAvailableCheckboxRent"><input id="checkBoxMainPage" type="checkbox" name="available" value="true" onclick="availableOrNot()" /></div>';
					availableChecked = false;

				}
				else
				{
					searchBarAvailableCheckVar.innerHTML =  '<td id="searchBarAvailableCheck" style="padding-right:10px;"><input type="checkbox" name="available" value="true" checked="checked" onclick="availableOrNot()" /></td>';
					searchBarAvailableCheckRentVar.innerHTML = '<td id="searchBarAvailableCheckRent" style="padding-right:10px;"><input type="checkbox" name="available" value="true" checked="checked" onclick="availableOrNot()" /></td>';
					//propAvailCheck.innerHTML = '<div id="propertiesAvailableCheckbox"><input id="checkBoxMainPage" type="checkbox" name="available" value="true" checked="checked" onclick="availableOrNot()" /></div>';
					//propAvailCheckRent.innerHTML = '<div id="propertiesAvailableCheckboxRent"><input id="checkBoxMainPage" type="checkbox" name="available" value="true" checked="checked" onclick="availableOrNot()" /></div>';
					availableChecked = true;
				}
			}




		</script>









		       <!-- old rent and buy script -->
		       <!--<script type="text/javascript">
					   //Code for search Bars
					   var searchBar = document.getElementById("searchBar");
					   var searchBarRent = document.getElementById("searchBarRent");
					   var buying = document.getElementById("buying");
					   var renting = document.getElementById("renting");

					   function changeToRent()
					   {
						   buying.innerHTML = '<input type="radio" name="buyorrent" value="buy" checked="checked" align="bottom" onclick="changeToBuy()"><br>';
						   searchBar.style.display = 'none';
						   searchBarRent.style.display = 'block';
					   }

					   function changeToBuy()
					   {
						   renting.innerHTML = '<input type="radio" name="buyorrent" value="rent" checked="checked" align="bottom" onclick="changeToRent()">';
						   searchBarRent.style.display = 'none';
						   searchBar.style.display = 'block';
					   }


				   </script>-->

		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

		<script type="text/javascript">(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>


		<script type="text/javascript">

			// Featured property image change

			var featuredPictureID0 = document.getElementById("featured0");

			var imageArrayFeatured0 = [

			];

			var imageNumberFeatured0 = 0;
			var imageIntervalFeatured0;
			function changeImageFeatured0()
			{
				featuredPictureID0.src = imageArrayFeatured0[imageNumberFeatured0];
				if (imageNumberFeatured0 >= imageArrayFeatured0.length - 1)
				{
					imageNumberFeatured0 = 0;
				}
				else
				{
					imageNumberFeatured0++;
				}
			}
			function runTimerFeatured0()
			{
				imageIntervalFeatured0 = setInterval(changeImageFeatured0, );
			}
			function holdImageFeatured0()
			{
				clearInterval(imageIntervalFeatured0);
			}
			runTimerFeatured0();
		</script>

		<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<script type="text/javascript">
			var jquery_normal = $.noConflict();
		</script>






		<script>

			var initialLoadSet = getCookie("pageInitialLoadSet");



			jquery_normal('.preventDefault').click(function(event)
			{
				event.preventDefault();
			});


			// Shows the contact information for the Maidstone branch

			var maidstoneOpen = true;
			var gillinghamOpen = false;

			function maidstone()
			{
				if (gillinghamOpen == true)
				{
					jquery_normal('#contentLeftWrapperGillingham').animate({width: 'toggle'}, 1000);
					jquery_normal('#contentRightWrapperGillingham').animate({width: 'toggle'}, 1000);
					gillinghamOpen = false;
					checkHighlight();
				}
				if (maidstoneOpen == true)
				{
					jquery_normal('#contentLeftWrapperMaidstone').animate({width: 'toggle'}, 1000);
					jquery_normal('#contentRightWrapperMaidstone').animate({width: 'toggle'}, 1000);
					maidstoneOpen = false;
					checkHighlight();
				}
				else if (maidstoneOpen == false)
				{
					jquery_normal('#contentLeftWrapperMaidstone').animate({width: 'toggle'}, 1000);
					jquery_normal('#contentRightWrapperMaidstone').animate({width: 'toggle'}, 1000);
					maidstoneOpen = true;
					checkHighlight();
				}
			}

			function gillingham()
			{
				if (maidstoneOpen == true)
				{
					//alert("maidstoneOpen is true");
					jquery_normal('#contentLeftWrapperMaidstone').animate({width: 'toggle'}, 1000);
					jquery_normal('#contentRightWrapperMaidstone').animate({width: 'toggle'}, 1000);
					maidstoneOpen = false;
					checkHighlight();
				}

				if (gillinghamOpen == true)
				{
					//alert("GillinghamOpen is true");
					jquery_normal('#contentLeftWrapperGillingham').animate({width: 'toggle'}, 1000);
					jquery_normal('#contentRightWrapperGillingham').animate({width: 'toggle'}, 1000);
					gillinghamOpen = false;
					checkHighlight();
				}
				else if (gillinghamOpen == false)
				{
					//alert("Gillingham is false");
					jquery_normal('#contentLeftWrapperGillingham').animate({width: 'toggle'}, 1000);
					jquery_normal('#contentRightWrapperGillingham').animate({width: 'toggle'}, 1000);
					gillinghamOpen = true;
					checkHighlight();
				}
			}

			function checkHighlight()
			{
				if (maidstoneOpen)
				{
					document.getElementById("branchHighlightMaidstone").style.fontWeight = "bolder";
				}
				else
				{
					document.getElementById("branchHighlightMaidstone").style.fontWeight = "normal";
				}

				if (gillinghamOpen)
				{
					document.getElementById("branchHighlightGillingham").style.fontWeight = "bolder";
				}
				else
				{
					document.getElementById("branchHighlightGillingham").style.fontWeight = "normal";
				}
			}

			checkHighlight();


			//  Number reveal when clicking logo

			function revealNumbers()
			{
				jquery_normal('.phoneIcon').animate({
					width: [ "toggle","swing"]
				});
				jquery_normal('.bannerContainerTelephoneMaidstone').animate({width: 'toggle'},1000);
				jquery_normal('.bannerContainerTelephoneGillingham').animate({width: 'toggle'},1000);
			}


			//////////// COOKIE FUNCTIONS //////////////////



			function getCookie(NameOfCookie)
			{ if (document.cookie.length > 0)
			{ begin = document.cookie.indexOf(NameOfCookie+"=");
				if (begin != -1)
				{ begin += NameOfCookie.length+1;
					end = document.cookie.indexOf(";", begin);
					if (end == -1) end = document.cookie.length;
					return unescape(document.cookie.substring(begin, end)); }
			}
				return null;
			}

			//This cookie check below is the the EU regulation about cookies
			function check()
			{
				document.getElementById('cookieNoticeContainer').style.display = 'none';
				expires.setFullYear(expires.getFullYear() + 1);
				document.cookie = "cookieWarning; expires = " + expires.toGMTString() + "; path=/";
				document.cookie = "cookie=Warning; max-age = " + (60 * 60 * 24 * 365) + "; path=/";
//alert(document.cookie + expires.toGMTString());
			}
			//alert(document.cookie + expires.toGMTString());
			//alert(expires.toGMTString());

			function setCookie(NameOfCookie, value)
			{
				document.cookie = NameOfCookie + "=" + escape(value) + "; path=/";
			}



			function delCookie (NameOfCookie)
			{ if (getCookie(NameOfCookie)) {
				document.cookie = NameOfCookie + "=" +
						"; expires=Thu, 01-Jan-70 00:00:01 GMT";
			}

			}

			////////////// END COOKIE FUNCTIONS ///////////////////

			// Set cookie for property search select





		</script>

		<script src="magnific/jquery.magnific-popup.js"></script>


		<script>
			jquery_normal(document).ready(function() {

				jquery_normal('.pic').magnificPopup({
					type:'image',
					removalDelay: 1300,

					mainClass: 'mfp-fade'

				});

				//Code for floorplan slider.

				// jquery_normal( '.slide' ).click(function(e) {
				// e.preventDefault();
				//jquery_normal( '#details' ).slideToggle(1000, function() {

				// });
				//});

			});

		</script>

		       <!--    <script src="sliderengine/jquery.js"></script>-->
		<script src="sliderengine/amazingslider.js"></script><script src="sliderengine/initslider-1.js"></script>


		       <!-- Google -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-47325417-1', 'bensiggins.co.uk');
			ga('send', 'pageview');

		</script>

		       <!-- PInterest-->
		<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
		       <!-- PInterest -->


		       <!-- Start of StatCounter Code for Default Guide -->
		<script type="text/javascript">
			var sc_project=9226046;
			var sc_invisible=1;
			var sc_security="226db6c3";
			var scJsHost = (("https:" == document.location.protocol) ?
					"https://secure." : "http://www.");
			document.write("<sc"+"ript type='text/javascript' src='" +
					scJsHost+
					"statcounter.com/counter/counter.js'></"+"script>");
		</script>
		<noscript><div class="statcounter"><a title="web analytics"
		                                      href="http://statcounter.com/" target="_blank"><img
							class="statcounter"
							src="http://c.statcounter.com/9226046/0/226db6c3/1/"
							alt="web analytics"></a></div></noscript>
		       <!-- End of StatCounter Code for Default Guide -->

	</body>
</html>