<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    

    <title>hunt4place</title>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<style>
/* Custom indentations are needed because the length of custom labels differs from
   the length of the standard labels */
.custom-size-flipswitch.ui-flipswitch .ui-btn.ui-flipswitch-on {
    text-indent: -4em;
}
.custom-size-flipswitch.ui-flipswitch .ui-flipswitch-off {
    text-indent: 2em;
}
/* Custom widths are needed because the length of custom labels differs from
   the length of the standard labels */
.custom-size-flipswitch.ui-flipswitch {
    width: 8.875em;
}
.custom-size-flipswitch.ui-flipswitch.ui-flipswitch-active {
    padding-left: 7em;
    width: 1.875em;
}
</style>

<link rel='stylesheet' id='roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700&amp;subset=latin%2Clatin-ext&amp;ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='wp-content/themes/superlist/assets/libraries/font-awesome/css/font-awesome.mineb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='superlist-font-css'  href='wp-content/themes/superlist/assets/libraries/superlist-font/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='colorbox-css'  href='wp-content/themes/superlist/assets/libraries/colorbox/example1/colorboxeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='wp-content/themes/superlist/assets/libraries/owl.carousel/owl.carouseleb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-select-css'  href='wp-content/themes/superlist/assets/libraries/bootstrap-select/bootstrap-select.mineb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='superlist-css'  href='wp-content/themes/superlist/assets/css/superlist-minteb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='wp-content/themes/superlist/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='cmb-google-maps-css'  href='wp-content/plugins/inventor/libraries/cmb_field_map/css/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='cmb-google-street-view-css'  href='wp-content/plugins/inventor/libraries/cmb_field_street_view/css/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='inventor-poi-css'  href='wp-content/plugins/inventor/assets/fonts/inventor-poi/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='inventor-partners-css'  href='wp-content/plugins/inventor-partners/assets/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='inventor-pricing-css'  href='wp-content/plugins/inventor-pricing/assets/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='inventor-reviews-css'  href='wp-content/plugins/inventor-reviews/assets/styleeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='wp-includes/css/buttons.mineb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.mineb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='wp-includes/js/mediaelement/mediaelementplayer.mineb0c.css?ver=2.18.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='wp-includes/js/mediaelement/wp-mediaelementeb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='media-views-css'  href='wp-includes/css/media-views.mineb11.css?ver=4.4' type='text/css' media='all' />
<link rel='stylesheet' id='imgareaselect-css'  href='wp-includes/js/imgareaselect/imgareaselect3bf4.css?ver=0.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='wsl-widget-css'  href='wp-content/plugins/wordpress-social-login/assets/css/styleeb11.css?ver=4.4' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jqueryc1d8.js?ver=1.11.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='wp-content/plugins/inventor/libraries/cmb_field_map/js/scripteb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor/libraries/cmb_field_street_view/js/scripteb11.js?ver=4.4'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?libraries=weather%2Cgeometry%2Cvisualization%2Cplaces%2Cdrawing&amp;ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/utils.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/plupload/plupload.full.mincc91.js?ver=2.1.8'></script>


</head>

<body class="single single-dating postid-604 header-sticky layout-wide submenu-dark">

   
   
<?php
include 'connect.php';
if($_REQUEST["name"]){
$name=$_REQUEST["name"];
}
else{
$name="Barbeque Nation";
}
$sql = "SELECT * FROM food WHERE Name='".$name."'";
$result = $con->query($sql);
$H_ID = 0;
$Name = $H_Address = $Phone_NO = $H_Latitude = $H_Longitude = $morning = $afternoon = $evening = $veg = $nonveg = $egg = $maharaja = $range2 = $affordable = $economy = $essential = $mughlai = $asian = $italian = $spanish = $mediterranean = $mexican = $thai = $continental = $tibetan = $cafe = $southindian = $pizza = $streetfood = $gujarati = $lucknowi = $rajasthani = $chinese = $dessert = $european = $icecream = $bakery = $american = $japanese = $seafood = "";
if($result->num_rows >0){
while($row = mysqli_fetch_assoc($result)){
	$Name = $row["Name"];
	$morning = $row["COL 7"];
	$evening = $row["COL 9"];
	$afternoon = $row["COL 8"];
	$veg = $row["COL 10"];
	$nonveg = $row["COL 11"];
	$egg = $row["COL 12"];
	$maharaja = $row["COL 13"];
	$range2 = $row["COL 14"];
	$affordable = $row["COL 15"];
	$economy = $row["COL 16"];
	$essential = $row["COL 17"];
	$H_Address = $row["H_Address"];
	$Phone_NO = $row["COL 4"];
	$mughlai = $row["COL 52"];
	$asian = $row["COL 53"];
	$italian = $row["COL 54"];
	$spanish = $row["COL 55"];
	$mediterranean = $row["COL 56"];
	$mexican = $row["COL 57"];
	$thai = $row["COL 58"];
	$continental = $row["COL 59"];
	$tibetan = $row["COL 60"];
	$southindian = $row["COL 64"];
	$streetfood = $row["COL 66"];
	$gujarati = $row["COL 67"];
	$lucknowi = $row["COL 68"];
	$rajasthani = $row["COL 69"];
	$chinese = $row["COL 70"];
	$european = $row["COL 72"];
	$american = $row["COL 75"];
	$japanese = $row["COL 76"];
	$seafood = $row["COL 77"];
	$H_Latitude = $row["H_Lattitude"];
	$H_Longitude = $row["Longitude"];
}
}
else {
	$name="wrong";	
}

?>   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="page-wrapper">
    <header class="header header-minimal">
                    <div class="header-bar">
                <div class="container">
                    
                </div><!-- /.container -->
            </div><!-- /.header-bar -->
        
        <div class="header-wrapper affix-top">
            <div class="container">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="../index.php" rel="home">
                                                            <i class="superlist-logo"></i>
                            
                                                            <span>hunt4place</span>
                                                    </a>
                    </div><!-- /.header-logo -->

                    
                </div><!-- /.header-inner -->
            </div><!-- /.container -->

                    </div><!-- /.header-wrapper -->
    </header><!-- /.header -->

                                






















<div class="listing-detail-menu-wrapper">
    <div class="listing-detail-menu">
        <div class="container">
            <ul class="nav nav-pills"></ul>
        </div><!-- /.container -->
    </div><!-- /.listing-detail-menu -->
</div><!-- /.listing-detail-menu-wrapper -->
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
            
    <div class="main">

        
        <div class="main-inner">
            <div class="container">
                
    <div class="row">
        <div class="col-sm-8 col-lg-9">
            <div id="primary">

                
                                            <div class="content">
                                                            <div class="listing-detail">

    <!-- Gallery -->
    
                        
    
    <!-- Description -->
    

    
    <!-- Attributes -->
    
                <div class="listing-detail-section" id="listing-detail-section-attributes">
            <h2 class="page-header">Attributes</h2>

            <div class="listing-detail-attributes">
                <ul>
                                            <li class="listing_listing_category">
                            <strong class="key">Contact No</strong>
                            <span class="value"><?php if($Phone_NO) { echo $Phone_NO; }
													  else { echo "Not Available";} ?></span>
                        </li>
                                            <li class="listing_dating_gender">
                            <strong class="key">Price per couple</strong>
                            <span class="value"><?php if($maharaja) echo "1300";
													  if($range2) echo "900";
													  if($affordable) echo "600";
													  if($economy) echo "400";
													  if($essential) echo "300"; ?></span>
                        </li>
                                            <li class="listing_listing_category">
                            <strong class="key">availability</strong>
                            <span class="value"><?php if($morning){ echo " morning "; }
													  if($afternoon){echo " afternoon ";}
													  if($evening){echo " evening ";} 	 ?></span>
                        </li>
                                            <li class="listing_dating_group">
                            <strong class="key">cuisine</strong>
                            <span class="value"><?php if($mughlai){ echo " Mughlai "; }
													  if($asian){echo " Asian ";}
													  if($italian){echo " Italian ";}
													  if($spanish){echo " Spanish ";}
													  if($mediterranean){echo " Mediterranean ";}
													  if($mexican){echo " Mexican ";}
													  if($thai){echo " Thai ";}
													  if($continental){echo " Continental ";}
													  if($tibetan){echo " Tibetan ";}
													  if($southindian){echo " South Indian ";}
													  if($streetfood){echo " Streetfood ";}
													  if($gujarati){echo " Gujarati ";}
													  if($lucknowi){echo " Lucknowi ";}
													  if($rajasthani){echo " Rajasthani ";}
													  if($chinese){echo " Chinese ";}
													  if($european){echo " European ";}
													  if($american){echo " American ";}
													  if($japanese){echo " Japanese ";}
													  if($seafood){echo " Seafood ";}
													   	 ?></span>
                        </li>
                                            <li class="listing_listing_category">
                            <strong class="key">Address</strong>
                            <span class="value"><?php echo $H_Address ?></span>
                        </li>
                                    </ul>
            </div><!-- /.listing-detail-attributes -->
        </div><!-- /.listing-detail-section -->
    
    <!-- Property amenities -->



<!-- VALUATION -->



<!-- PUBLIC FACILITIES -->




    <!-- Video -->
    
                        
    
    <!-- Food menu -->
    
        
    
    <!-- Opening hours -->
    
                    
        	
    
    <!-- Google map -->
    
        <?php
		if($H_Latitude){
		?>                            
                
                    <div class="listing-detail-section"  id="listing-detail-section-location">
                <h2 class="page-header">Location</h2>

                <div class="listing-detail-location-wrapper">
                    <!-- Nav tabs -->
                    <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">

                                                    <li role="presentation" class="active">
                                <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                                    <i class="fa fa-map"></i>Map                                </a>
                            </li>
                        
                        
                        
                        <li class="directions">
                        <?php 
						$address="https://www.google.com/maps/dir//".$H_Latitude.",".$H_Longitude."/@".$H_Latitude.",".$H_Longitude.",17z/data=!3m1!4b1";
						
						?>
                            <a href="<?php echo $address ?>">
                                <i class="fa fa-level-down"></i>Directions                            </a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                                                    <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                                <div class="detail-map">
                                    <div class="map-position">
                                        <div id="listing-detail-map"
                                             data-transparent-marker-image="wp-content/themes/superlist/assets/img/transparent-marker-image.png"
                                             data-latitude="<?php echo $H_Latitude ?>"
                                             data-longitude="<?php echo $H_Longitude ?>"
                                             data-polygon-path=""
                                             data-marker-style="simple">
                                        </div><!-- /#map-property -->
                                    </div><!-- /.map-property -->
                                </div><!-- /.detail-map -->
                            </div>
                        
                        
                        
                    </div>
                </div>
            </div><!-- /.listing-detail-section -->
            <?php
			}
			?>
    
    <!-- Contact -->
    
                                    
            
    
    <!-- Social -->
    
                                                
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                            
                        
    
    <!-- FAQs -->
    
    
    
    
    <!-- Comments / Reviews -->
    
    
                        <div id="listing-detail-section-reviews" class="listing-detail-section">

                    <h2 class="page-header review-title">Reviews<span class="review-count">1</span></h2>

            <ul class="review-list">
                <li id="review-72">
    <div class="review clearfix">
        <div class="review-inner">

            
            <div class="review-header">
                <h2>John Doe</h2>                            
            </div><!-- /.review-header -->
            <div class="review-content-wrapper">
                    <div class="review-content">
                         <div class="review-pros">
                                <p>Curabitur magna metus, vulputate et massa at, sagittis rutrum dolor. Curabitur consectetur convallis nibh id vulputate. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>
                            </div><!-- /.review-pros -->
                     </div><!-- /.review-content -->
            </div><!-- /.review-content-wrapper -->
            
                        
        </div><!-- /.review-inner -->
    </div><!-- /.review -->
</li>
                <li id="review-72">
    <div class="review clearfix">
        <div class="review-inner">

            
            <div class="review-header">
            	
                <h2><img src="../assets/img/logo.png">&nbsp;&nbsp;John Doe</h2><br> 
                                           
            </div><!-- /.review-header -->
            <div class="review-content-wrapper">
                    <div class="review-content">
                         <div class="review-pros">
                                <p>Curabitur magna metus, vulputate et massa at, sagittis rutrum dolor. Curabitur consectetur convallis nibh id vulputate. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>
                            </div><!-- /.review-pros -->
                     </div><!-- /.review-content -->
            </div><!-- /.review-content-wrapper -->
            
                        
        </div><!-- /.review-inner -->
    </div><!-- /.review -->
</li>

</ul>
            
                    <div class="review-form">
                				<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title"><div data-role="main" class="ui-content">
    <input type="button" value="Post Your Review" onClick="review()">
  </div></h3>				
            
            
					</div><!-- #respond -->
		            </div><!-- /.review-form -->
            </div><!-- #review -->
                            


        
    
    
    <!-- Report -->
    
			      
    
</div><!-- /.listing-detail -->
                            
                                                    </div><!-- /.content -->
                    
                
            </div><!-- #primary -->
        </div><!-- /.col-* -->

        
  
  
  
  
  
      <div class="col-sm-4 col-lg-3">
        <div id="secondary" class="secondary sidebar">
            
<div id="listing_author-2" class="widget widget_listing_author">
	<div class="widget-inner
   "
		>

		
				<div class="listing-author">
																											
							<div class="listing-author-name">
								<b>Phone No</b><br><?php if($Phone_NO) { echo $Phone_NO; }
													  else { echo "Not Available";} ?><br>
                                <b>ADDRESS</b><br><?php echo $H_Address; ?><br>
                    		</div><!-- /.listing-author-name -->
							</div><!-- /.listing-author -->
	</div><!-- /.widget-inner -->

</div>
<div id="listing_details-2" class="widget widget_listing_details">
    <div class="widget-inner
   "
        >

        
        <div class="inventor-favorites-total">
            <i><?php if($morning){ ?><img src="../assets/img/logo.png" width="20" height="20"><?php }else{ ?><img src="" width="20" height="20"><?php } ?></i>
    Breakfast</div>
    <div class="inventor-favorites-total">
            <i><?php if($afternoon){ ?><img src="../assets/img/logo.png" width="20" height="20"><?php }else{ ?><img src="" width="20" height="20"><?php } ?></i>
    Lunch</div>
    <div class="inventor-favorites-total">
            <i><?php if($evening){ ?><img src="../assets/img/logo.png" width="20" height="20"><?php }else{ ?><img src="" width="20" height="20"><?php } ?></i>
    Dinner</div>
    <div class="inventor-favorites-total">
            <i><?php if($veg){ ?><img src="../assets/img/logo.png" width="20" height="20"><?php }else{ ?><img src="" width="20" height="20"><?php } ?></i>
    Veg</div>
    <div class="inventor-favorites-total">
            <i><?php if($nonveg){ ?><img src="../assets/img/logo.png" width="20" height="20"><?php }else{ ?><img src="" width="20" height="20"><?php } ?></i>
    Non-veg</div>
    <div class="inventor-favorites-total">
            <i><?php if($egg){ ?><img src="../assets/img/logo.png" width="20" height="20"><?php }else{ ?><img src="" width="20" height="20"><?php } ?></i>
    Eggetarian</div>
    
    </div><!-- /.widget-inner -->

</div>

        
    
<div id="listing_inquire-2" class="widget widget_listing_inquire">
<div class="widget-inner
   "
	>

</div><!-- /.widget-inner -->

</div>        </div><!-- /#secondary -->
    </div><!-- /.col-* -->

  
  
  
  
    </div><!-- /.row -->


                














<script>
function review(){
	window.location.assign("http://www.studystuff.co.in/");
}
</script>




	<!--[if lte IE 8]>
	<style>
		.attachment:focus {
			outline: #1e8cbe solid;
		}
		.selected.attachment {
			outline: #1e8cbe solid;
		}
	</style>
	<![endif]-->

	<script type='text/javascript' src='wp-includes/js/comment-reply.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-select/bootstrap-select.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdowneb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/collapseeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltipeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/alerteb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/affixeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/tabeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/transitioneb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/scrollspyeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/colorbox/jquery.colorbox-mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/owl.carousel/owl.carousel.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/libraries/scrollto/jquery.scrollTo.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/themes/superlist/assets/js/superlisteb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor/assets/js/inventoreb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/masonry.min0226.js?ver=3.1.2'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-claims/assets/js/inventor-claimseb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-coupons/assets/js/inventor-couponseb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-favorites/assets/js/inventor-favoriteseb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-google-map/libraries/jquery-google-map/infoboxeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-google-map/libraries/jquery-google-map/markerclusterereb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-google-map/libraries/js-cookieeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-google-map/libraries/jquery-google-map/jquery-google-mapeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-google-map/assets/js/inventor-google-mapeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-reviews/assets/scripteb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-reviews/libraries/raty/jquery.ratyeb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/underscore.minaff7.js?ver=1.6.0'></script>
<script type='text/javascript' src='wp-includes/js/shortcode.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/backbone.mincfa9.js?ver=1.1.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/wp-util.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/wp-backbone.mineb11.js?ver=4.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/media-models.mineb11.js?ver=4.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/plupload/wp-plupload.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/sortable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-and-player.mineb0c.js?ver=2.18.1'></script>
<script type='text/javascript' src='wp-includes/js/mediaelement/wp-mediaelementeb11.js?ver=4.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/media-views.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/media-editor.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/media-audiovideo.mineb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/inventor-testimonials/assets/js/scripteb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.mineb11.js?ver=4.4'></script>

</body>
</html>
