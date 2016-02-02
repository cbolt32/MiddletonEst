<!-- Modal -->
<div id="modalProp<?php echo $row['propertyID']; ?>" class="modal fade full-screen" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content col-lg-12 col-md-12 col-sm-12 col-xs-12"
		">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><?php echo '<h3>' . $road . ', ' . substr
					( $postcode, 0, 5 ) . '</h3>' . "<h4>£" . $row['price'] . ' - ' . $row['qualifier'] . '</h4>'; ?></h4>
		</div>
		<div class="modal-body">
			<div class="" style="padding-left: 0px; padding-right: 0px; border-right: 0px;">
				<h1><?php echo $road.$Location ;?> Property Details</h1>
<!--				--><?php // $prop_id = $row['propertyID'];?>
				<?php
				for ( $i = 0; $i <= 39; ++$i ) {
					if ( $row[ 'filesurl' . $i ] != null )
					{
						?>
						<!-- thumb navigation carousel -->
						<div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

							<!-- thumb navigation carousel items -->
							<ul class="list-inline">
								<li>
									<a id="carousel-selector-0" class="active item">
										<img src="<?php echo $row[ 'floorplan0' . $i ]; ?>" class="img-responsive" style="height:
									60px; width: 80px;">
									</a>
								</li>
								<li>
									<a id="carousel-selector-<?php echo $i; ?>" class="">
										<img src="<?php echo $row[ 'filesurl' . $i ]; ?>" class="img-responsive" style="height:
									60px; width: 80px;">
									</a>
								</li>
							</ul>
						</div>

						<!-- main slider carousel -->
						<div class="row">
							<div class="col-md-12" id="slider">
								<div class="col-md-12" id="carousel-bounding-box">
									<div id="myCarousel" class="carousel slide">
										<!-- main slider carousel items -->
										<div class="carousel-inner">
											<div class="" data-slide-number="0">
												<img src="<?php echo $row[ 'floorplan0']; ?>"
												     class="img-responsive">
											</div>
											<div class="" data-slide-number="<?php echo	$i;	?>">
												<img src="<?php echo $row[ 'filesurl' . $i ]; ?>"
												     class="img-responsive">
											</div>
										</div>
										<!-- main slider carousel nav controls -->
										<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
										<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
									</div>
								</div>
							</div>
						</div>
					<?php };
				}; ?>
				<!--/main slider carousel-->

				<div>
					<h3>
						Key Features
					</h3>
					<?php
					for ($j = 0; $j <= 10; $j++)
					{
						if ( $row['bullets' . $j] != NULL)
						{
							echo '<li>' . $row[ 'bullets' . $j ] . '</li>';
						}
					}
					?>
				</div>
				<?php



				cbOutput($row['custom_location']);

				cbOutput($row['custom_location']);
				cbOutput(['available']);
				cbOutput($row['type']);
				cbOutput($row['furnished']);
				cbOutput($row['let_bond']);
				cbOutput($row['bedrooms']);
				cbOutput($row['receptions']);
//				echo '<h5>Type</h5>' . $row['type'] . '</br>';
//				echo '<h5>Furnished</h5>' . $row['furnished'] . '</br>';
//				echo '<h5>Let Bond</h5>' . $row['let_bond'] . '</br>';
//				echo '<h5>Bedrooms</h5>' . $row['bedrooms'] . '</br>';
//				echo '<h5>Receptions</h5>' . $row['receptions'] . '</br>';
				echo '<h5>Bathrooms</h5>' . $row['bathrooms'] . '</br>';
				echo '<h5>Userfield 1</h5>' . $row['userfield1'] . '</br>';
				echo '<h5>qualifier</h5>' . $row['qualifier'] . '</br>';
				echo '<h5>price</h5>' . $row['price'] . '</br>';
				echo '<h5>userfield2</h5>' . $row['userfield2'] . '</br>';
				echo '<h5>lease end</h5>' . $row['leaseend'] . '</br>';
				echo '<h5>Instructed</h5>' . $row['instructed'] . '</br>';
				echo '<h5>Desciption</h5>' . $row['description'] . '</br>';
				echo '<h5>Area Measure Min</h5>' . $row['areaMeasureMetricMin'] . '</br>';
				echo '<h5>Area Measure Max</h5>' . $row['areaMeasureMetricMax'] . '</br>';
				echo '<h5>Energy Eff Curr</h5>' . $row['HIPenergy_efficiencyCurrent'] . '</br>';
				echo '<h5>Energy Eff Pot</h5>' . $row['HIPenergy_efficiencyPotential'] . '</br>';
				echo '<h5>Enviro Impact Curr</h5>' . $row['HIPenvironmental_impactCurrent'] . '</br>';
				echo '<h5>Enviro Imact Pot</h5>' . $row['HIPenvironmental_impactPotential'] . '</br>';

//				echo '<h5>Bullet</h5>' . $row['bullets1'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets2'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets3'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets4'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets5'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets6'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets7'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets8'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets9'] . '</br>';
//				echo '<h5>Bullet</h5>' . $row['bullets10'] . '</br>';
				for ($i = 0; $i <= 30; $i++)
				{
					if ( $row[ 'paragraphname' . $i ] != NULL   )
					{

						echo $row['paragraphname' . $i] . '</br>';
						echo $row['paragraph' . $i] . '</br>';
						echo $row['measurementMixed' . $i] . '</br>';
					}
				}
				echo '<h1>TEST</h1>' . $row['paragraphname0']

				?>


				<!--				<img class="img img-responsive" src="-->
				<?php //echo $row['filesurl28'];?><!--"></img></br>-->
				<img class="img img-responsive" src="<?php echo $row['floorplan0']; ?>"></img></br>
				<img class="img img-responsive" src="<?php echo $row['floorplan1']; ?>"></img></br>
				<?php

				echo $row['EErating0'] . '</br>';
				echo $row['EErating1'] . '</br>';
				//echo $row[''] . '</br>';
				//echo $row[''] . '</br>';
				?>

			</div>
		</div>

	</div>

</div>
</div>
</div>
</div>
</div>