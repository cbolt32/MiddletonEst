<?php

//include $_SERVER ['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
class paginate {
	private $db;
	
	function __construct( $pdo ) {
		$this->db = $pdo;
	}
	
	public function dataview( $query ) {
		$stmt = $this->db->prepare( $query );
		$stmt->execute();
		
		if ( $stmt->rowCount() > 0 ) {
			while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
				?>
				<div class="searchResultItems" id="propSearchResults" style="padding-left: 0px; padding-right: 0px;">
				<!-- Prop Details-->
					<div class="resultsRow">
						<div class=" col-lg-5 col-md-5 col-sm-12 col-xs-12 resultImg" style="padding-left: 0px; padding-right: 0px; border-right: 0px;">
							<a class="" data-toggle="modal" data-target="#modalProp<?php echo $row["propertyID"] ;?>">
							<img class="img-responsive " style="zoom: 2; display: block; margin: auto; height: auto; max-height: 100%;width: auto; max-width: 100%;" src="<?php echo $row['filesurl0']; ?>" alt="" style="margin-right: 0px;">
							</a>
						</div>
						<div class="propSummary col-lg-7 col-md-7 col-sm-12 col-xs-12">
<!--							--><?php //$id = $row['databaseid'] . '</br>'; ?>

							<?php

							//Pulls apart address field to break down loc title
							$address = explode(',', $row['address']);
							$tempPC = array_slice($address, 5, 5);
							$tempRD = array_slice($address, 1, 1);
							$tempLoc = array_slice($address, 2, 2);
							$postcode = implode(',',$tempPC);
							$road = implode(',',$tempRD);
							$Location = implode(',',$tempLoc);
							echo '<h3>' . $road . $Location .", " . substr($postcode, 0, 5) .'</h3>';
							echo "<h4>£" . $row['price'] .' - '. $row['qualifier']  .'</h4>';
							//echo $id . '</br>';
							echo '</br>';
							echo '<div class="">';
							//Cut descrpition length to give overview of prop
							echo '<p>' . myTruncate($row['description'], 150) .'</p>'  ;

							echo '<div style="background-color: #FFFFFF; border: 0.3px dotted #000000; height: 1px; margin: 10px 0;"> </div>';
							echo '
							<img src="../../images/Icons/house.png" style="height: 20px; margin-right: 5px ;">'
							. $row['type'] .'</br>'. '  '
							.'<img src="images/bed.png" style="height: 25px; margin-right: 5px ;">  '
							. $row['bedrooms'] . ' Bedrooms  ' .'</br>'
							. '<img src="images/bathtub.png" style="height:25px; margin-right:5px ;">  '
							. $row['bathrooms'] . ' Bathrooms  ';

							echo '</div>';

							 ?>
<!--Modal-->
				<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/php/modalPropertyDetails.php';
			}
		} else {
			?>
			<ul>
				<li>Nothing here...</li>
			</ul>
			<?php
		}
		
	}

	//
	public function paging( $query, $records_per_page ) {
		$starting_position = 0;
		if ( isset( $_GET["page_no"] ) ) {
			$starting_position = ( $_GET["page_no"] - 1 ) * $records_per_page;
		}
		$query2 = $query . " limit $starting_position,$records_per_page";

		return $query2;
	}

//	Function generates pagination links based on inputted query, and records per page
	public function paginglink( $query, $records_per_page ) {
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare( $query );
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();

		if ( $total_no_of_records > 0 ) {
			?>
			<ul class="pagination pagination-sm ">
			<li><?php
				$total_no_of_pages = ceil( $total_no_of_records / $records_per_page );
				$current_page      = 1;
				if ( isset( $_GET["page_no"] ) ) {
					$current_page = $_GET["page_no"];
				}


				if ( $current_page != 1 ) {
					$previous = $current_page - 1;
					echo "<a href='" . $self . "?page_no=1'><<First><</a>&nbsp;&nbsp;";
					echo "<a href='" . $self . "?page_no=" . $previous . "'><Previous><</a>&nbsp;&nbsp;";
				}
				for ( $i = 1; $i <= $total_no_of_pages; $i ++ ) {
					if ( $i == $current_page ) {
						echo "<a href='" . $self . "?page_no=" . $i . "''>
" . $i . "</a>&nbsp;&nbsp;";
					}

//todo show 5 pages only
//					else
//					{
//						echo " ";
//					}
				}
				if ( $current_page != $total_no_of_pages ) {
					$next = $current_page + 1;
					echo "<a href='" . $self . "?page_no=" . $next . "'>></a>&nbsp;&nbsp;";
					echo "<a href='" . $self . "?page_no=" . $total_no_of_pages . "'>>></a>&nbsp;&nbsp;";
				}
				?></li></ul><?php
		}
	}
}