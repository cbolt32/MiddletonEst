



<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top mainHead"> <!-- todo: fix number appearance -->
	<div class="pull-right" id="callUsDiv">
		<a id="callUs" href="tel:01273230857">
			<span class="glyphicon glyphicon-phone"></span>
			<p class="hidden-sm hidden-xs" style="align-content: center"> 01273 230857</p>
		</a>
	</div>
	<div class="container mainCollapse">
		<img src="images/middleton logo m.svg" class="ico pull-left" alt="">
		<div class="navbar-header">

			<button id="navCollapse" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#smallNavbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<span class="navbar-brand">
				<h1 class="marketingHead">middleton estates</h1>
			</span>


		</div>
		<ul id="smallNavbar" class="nav nav-collapse nav-justified collapse navbar-collapse smallNavButtons transition" aria-expanded="true">
			<li><a class="collapse" href="index.php">Home</a></li>
			<li><a class="collapse" href="about.php">About Us</a></li>
			<li><a class="collapse" href="search.php">Search</a></li>
			<li><a class="collapse" href="contact.php">Contact Us</a></li>
			<li><a class="collapse" href="Testimonials.php">Testimonials</a></li>
		</ul>


		</div><!--/.navbar-collapse -->
	</div>
</nav>
<script>
	var navigation = responsiveNav(".nav-collapse", {
		animate: true,                    // Boolean: Use CSS3 transitions, true or false
		transition: 284,                  // Integer: Speed of the transition, in milliseconds
		label: "Menu",                    // String: Label for the navigation toggle
		insert: "after",                  // String: Insert the toggle before or after the navigation
		customToggle: "",                 // Selector: Specify the ID of a custom toggle
		closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
		openPos: "relative",              // String: Position of the opened nav, relative or static
		navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
		navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
		jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
		init: function(){},               // Function: Init callback
		open: function(){},               // Function: Open callback
		close: function(){}               // Function: Close callback
	});
</script>

