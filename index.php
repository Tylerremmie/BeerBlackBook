<!DOCTYPE html>
<html class="html" lang="en-US">
<head>
<?php
	include 'datalogin.php';
?>
<script type="text/javascript">
	if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<meta name="generator" content="2015.0.2.310"/>
<title>BeerBlackBook</title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/site_global.css?491975611"/>
<link rel="stylesheet" type="text/css" href="css/master_a-master.css?362534228"/>
<link rel="stylesheet" type="text/css" href="css/index.css?85491167" id="pagesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/iefonts_index.css?158936683"/>
<![endif]-->
<!-- Other scripts -->
	<script type="text/javascript">
	document.documentElement.className += ' js';
	var __adobewebfontsappname__ = "muse";
</script>
<!-- JS includes -->
<script type="text/javascript">
	document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/kreon:n7,n3,n4:all.js" type="text/javascript">\x3C/script>');
</script>

<!--[if lt IE 9]>
<script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
<![endif]-->
<style>
.fixed-nav-bar {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  width: 100%;
  height: 50px;
  background-color: #BE4040;
}

.feed-box{
	background:#ffffff;
	margin: 0 auto;
}
.feed-box h5{
	padding: 15px 15px 5px 15px;
	font-weight:bold;
	margin: 0 auto;
}
.feed-box ul li{
	padding:4px 15px;
	position:relative;
	border-bottom:1px solid #ddd;
	background: #fff;
}
.feed-box ul li:last-child{
	border-bottom:none
}
.feed-box ul li .img-holder{
	width:100px;
	height:100px;
	text-align:center;
	display:inline-block;
	background:#fff;
}
.feed-box ul li .img-holder img{
	height:100px;
	width:auto
}
.feed-box a:link, .feed-box a:visited, .feed-box a:link,  .feed-box a:active{
	text-decoration: none;
}
.generic-list{
	margin:0px;
	padding:0px;
	list-style:none
}
.generic-list-inline{
	margin:0px;
	padding:0px;
	list-style:none
}
.generic-list-inline li{
	display:inline
}
.generic-list-inline-block{
	margin:0px;
	padding:0px;
	list-style:none
}
.generic-list-inline-block li{
	display:inline-block
}
.feed-text-holder{
	position:absolute;
	left:130px;
	top:0px;
	height:108px;
	display:table
}
.feed-text-holder p{
	display:table-cell;
	vertical-align:middle;
}
.whitebox_title{
	color:#777777;
	text-shadow:0px 1px 1px #fff;
	font-size:14px;
	line-height:18px;
	margin:0px;
}
.variant{
	font-style:italic;
	font-size:11px
}
.feed-note{
	font-size:12px;
	color:#777777;
	position:relative;
	top:-2px
}
.total-box {
	font-size: 15px;
	padding:10px 15px;
	color: #FFF;
	background: #BE4040;
	margin: 0 auto;
}
#adHolderBannertop {
	background: transparent;
	width: 1051px;
	margin: 0 auto;
	margin-top: 25px;

}
#adHolderBannerbottom {
	background: transparent;
	width: 982px;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: -25px;
}
#adHolder {
	background: transparent;
	height: 90px;
	width: 728px;
	margin: 0 auto;
}
#adHoldertop {
	background: transparent;
	height: 105px;
	width: 1051px;
	margin: 0 auto;
}
#searchHolder {
	background: Transparent;
	width: 400px;
	height: 45px;
	z-index: 112;
	display: block;
	vertical-align: top;
	top: -83px;
	margin-bottom: -311px;
	position: relative;
	left: 312px;
}
.cf:before, .cf:after{
    content:"";
    display:table;

}

.cf:after{
    clear:both;
}

.cf{
    zoom:1;
}

/* Form wrapper styling */
.form-wrapper {
    width: 390px;
    padding: 15px;
    margin-left: -10px;
	margin-top: -13px;
}

/* Form text input */

.form-wrapper input {
    width: 330px;
    height: 20px;
    padding: 10px 5px;
    float: left;    
    font: bold 15px 'Arial', 'Helvetica Neue', 'Tahoma', 'sans-serif';
    border: 0;
    background: #fff;
    border-radius: 3px 0 0 3px;      
}

.form-wrapper input:focus {
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
}

.form-wrapper input::-webkit-input-placeholder {
   color: #000;
   font-weight: normal;
   font-style: italic;
}

.form-wrapper input:-moz-placeholder {
    color: #000;
    font-weight: normal;
    font-style: italic;
}

.form-wrapper input:-ms-input-placeholder {
    color: #000;
    font-weight: normal;
    font-style: italic;
}    

/* Form submit button */
.form-wrapper button {
    overflow: visible;
    position: relative;
    float: right;
    border: 0;
    padding: 0;
    cursor: pointer;
    height: 40px;
    width: 50px;
    font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
    color: #fff;
    text-transform: uppercase;
    background: #BE4040;
    border-radius: 0 3px 3px 0;      
    text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}   
  
.form-wrapper button:hover{		
    background: #e54040;
}	
  
.form-wrapper button:active,
.form-wrapper button:focus{   
    background: #c42f2f;
	outline: 0;   
}

.form-wrapper button:before { /* left arrow */
    content: '';
    position: absolute;
    border-width: 8px 8px 8px 0;
    border-style: solid solid solid none;
    border-color: transparent #BE4040 transparent;
    top: 12px;
    left: -6px;
}

.form-wrapper button:hover:before{
    border-right-color: #e54040;
}

.form-wrapper button:focus:before,
.form-wrapper button:active:before{
        border-right-color: #c42f2f;
}      

.form-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
    border: 0;
    padding: 0;
} 

.fixed-nav-bar {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  width: 100%;
  height: 40px;
  background-color: #BE4040;

}
.navwrap {
  width: 90%;
  max-width: 983px;
  margin: 8px auto;
}
.fixedsearchbar {
  float: right;
  height: 24px;
  width: 365px;
}

#search {
	float: right;
}

#search input[type="text"] {
    background: url(images/search-dark.png) no-repeat 10px 4px #fff;
    border: 0 none;
    font: bold 12px Arial,Helvetica,Sans-serif;
    color: #BE4040;
    width: 200px;
	height: 24px;
    padding: 0px 15px 0px 35px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
}
	
#search input[type="text"]:focus {
    width: 315px;
}
	
::-webkit-input-placeholder {opacity: 1 !important;}
::-moz-placeholder {opacity: 1 !important;}
:-ms-input-placeholder {opacity: 1 !important;}

</style>
</head>
<body>
<!-- <div class="fixed-nav-bar">

</div>-->

<div class="clearfix" id="page"><!-- column -->
<div class="position_content" id="page_position_content">

	<!-- FIXED SEARCH start /////////////////////////////////// -->
	<div class="fixed-nav-bar">
		<div class="navwrap">
			<div class="fixedsearchbar">
				<form method="post" action="http://www.beerblackbook.com/search.php" id="search">
				<input name="searchPost" type="text" size="40" placeholder="Search..." />
				</form>
			</div>
		</div>
	</div>
	<!-- FIXED SEARCH end /////////////////////////////////// -->


	<!-- HEADER start /////////////////////////////////// -->
	<div class="clearfix colelem" id="pu1374-6"><!-- group -->
		<div class="clearfix grpelem" id="u1374-6"><!-- content -->
			<p>BEERBLACKBOOK</p>
		</div>
		<nav class="MenuBar clearfix grpelem" id="menuu1338"><!-- horizontal box -->
		<div class="MenuItemContainer clearfix grpelem" id="u1367"><!-- vertical box -->
			<a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1368" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1371-4"><!-- content --><p>HOME</p></div></a>
		</div>
		<div class="MenuItemContainer clearfix grpelem" id="u1346"><!-- vertical box -->
			<a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1347" href="breweries.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1348-4"><!-- content --><p>BREWERIES</p></div></a>
		</div>
		<div class="MenuItemContainer clearfix grpelem" id="u1353"><!-- vertical box -->
			<a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1354" href="beers.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1356-4"><!-- content --><p>BEERS</p></div></a>
		</div>
		<div class="MenuItemContainer clearfix grpelem" id="u1339"><!-- vertical box -->
			<a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1340" href="../forums/index.php?forums/announcements.10/"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1342-4"><!-- content --><p>BLOG</p></div></a>
		  </div>
		<div class="MenuItemContainer clearfix grpelem" id="u1360"><!-- vertical box -->
			<a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1363" href="../forums"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1365-4"><!-- content --><p>FORUMS</p></div></a>
		</div>
		</nav>
	</div>
	<!-- HEADER end /////////////////////////////////// -->
	
	<!-- SLIDESHOW BANNER start /////////////////////// -->
	<div class="SlideShowWidget clearfix colelem" id="slideshowu1155"><!-- none box -->
		<div class="popup_anchor" id="u1165popup">
			<div class="SlideShowContentPanel clearfix" id="u1165"><!-- stack box -->
				<div class="SSSlide clip_frame grpelem" id="u1505" data-muse-uid="U1505" data-muse-type="img_frame"><!-- image -->
					<img class="ImageInclude" id="u1505_img" data-src="images/brewerybg3.jpg" src="images/blank.gif" alt="" data-width="1220" data-height="480" data-muse-src="images/brewerybg3.jpg"/>
				</div>
				<div class="SSSlide invi clip_frame grpelem" id="u1717" data-muse-uid="U1717" data-muse-type="img_frame"><!-- image -->
					<img class="ImageInclude" id="u1717_img" data-src="images/beerbg1.jpg" src="images/blank.gif" alt="" data-width="1248" data-height="480" data-muse-src="images/beerbg1.jpg"/>
				</div>
				<div class="SSSlide invi clip_frame grpelem" id="u1821" data-muse-uid="U1821" data-muse-type="img_frame"><!-- image -->
					<img class="ImageInclude" id="u1821_img" data-src="images/beer-683341.jpg" src="images/blank.gif" alt="" data-width="1409" data-height="480" data-muse-src="images/beer-683341.jpg"/>
				</div>
				<div class="SSSlide invi clip_frame grpelem" id="u1835" data-muse-uid="U1835" data-muse-type="img_frame"><!-- image -->
					<img class="ImageInclude" id="u1835_img" data-src="images/beer-bottles-797992.jpg" src="images/blank.gif" alt="" data-width="1220" data-height="915" data-muse-src="images/beer-bottles-797992.jpg"/>
				</div>
			</div>
		</div>
		<div class="popup_anchor" id="u1164-6popup">
			<a class="nonblock nontext SSPreviousButton clearfix" id="u1164-6" href="http://www.musefree.com" data-muse-uid="U1164" data-muse-type="txt_frame"><!-- content --><p><span id="u1164">​</span><span><span class="actAsInlineDiv normal_text" id="u1678"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u1671"><!-- rasterized frame --></span></span></span><span></span></p></a>
		</div>
		<div class="popup_anchor" id="u1163-6popup">
			<div class="SSNextButton clearfix" id="u1163-6" data-muse-uid="U1163" data-muse-type="txt_frame"><!-- content -->
				<p><span id="u1163">​</span><span><span class="actAsInlineDiv normal_text" id="u1693"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u1686"><!-- rasterized frame --></span></span></span><span></span></p>
			</div>
		</div>
	</div>
	<!-- SLIDESHOW BANNER end /////////////////////// -->
	

	
	<img class="colelem" id="u1441" alt="" width="433" height="311" src="images/browsebadge-u1441.png"/><!-- rasterized frame -->
	
	
	<!-- BANNER SEARCH BAR start /////////////////////// -->
	<div class="colelem" id="searchHolder">
		<form class="form-wrapper cf" method="post" action="http://www.beerblackbook.com/search.php"> 
			<input type="text" name="searchPost" id="searchPost" placeholder="Search..." required>
			<button type="submit"><i class="fa fa-search"></i></button>
		</form> 
	</div>
	<!-- BANNER SEARCH BAR end /////////////////////// -->
	

	
<div class="browser_width colelem" id="u1102-bw">
		
		<div id="u1102"><!-- group -->
		

			
			<div class="clearfix" id="u1102_align_to_page">
	
	<div class="clearfix grpelem" id="ppu1733-5">
	<!-- LATEST RECORDED TRANSACTIONS start ////////////////////////////// -->
	<div class="clearfix colelem" id="u2287"><!-- group -->
	<div class="grpelem" id="u2183"><!-- custom html -->
		<div class="total-box" align="center"><b><?php $transactionsresult = mysql_query(""); echo mysql_result($transactionsresult, 0); ?></b> Recorded Transactions Total</div>
		<div class="feed-box">
		<h5>Latest Recorded Transactions</h5>
		<ul class="generic-list">
		<?php
            $latestresult = mysql_query("")
			or die (mysql_error());
			
			while($latestrow = mysql_fetch_array($latestresult)){
				
				echo '<li>';
				if(empty($latestrow['PhotoID'])){
					echo "<a href='beerprofile.php?link=".$latestrow['BeerID']."&var=".$latestrow['VariantID']."' class='img-holder'><img src='http://beerblackbook.com/images/default.png' alt='Default Image'></a>";
				}else{
					echo "<a href='beerprofile.php?link=".$latestrow['BeerID']."&var=".$latestrow['VariantID']."' class='img-holder'><img src='http://beerblackbook.com/img/beers/".$latestrow['PhotoID'].".jpg' alt='Selected Beer Image'></a>"; 
				}
				echo '<div class="feed-text-holder">';
				echo '<p>';
				echo "<b><a href='beerprofile.php?link=".$latestrow['BeerID']."&var=".$latestrow['VariantID']."' style='color:#000;font-size:16px;text-decoration:none;'>".$latestrow['BeerName']."<span class='variant'> ".$latestrow['BottleSize']." (".$latestrow['Year'].")</a></span></b><br />";			
				echo "<span class='whitebox_title'><a href='breweryprofile.php?link=".$latestrow['BreweryID']."' style='color:#BE4040;text-decoration:none;'><b>".$latestrow['BreweryName']."</b></a></span><br />";
				echo "<span class='whitebox_title'>Sold for <b>$".$latestrow['Price']."</b></span><br />";
				echo "<span class='feed-note'>".$latestrow['end_date']." via <b>".$latestrow['Source']."</b></span></p>";
				echo '</p>';
				echo '</div>';
				echo '</li>';
			}
		?>
		</ul>
		</div>
	</div>
	</div>
	<!-- LATEST RECORDED TRANSACTIONS start ////////////////////////////// -->
	</div>
	
	<div class="clearfix grpelem" id="pu1705-5"><!-- column -->
	<!-- TOP 10 MOST LOGGED TRANSACTIONS - 90 Days start ////////////////////////////// -->
	<div class="clearfix colelem" id="u2393"><!-- group -->
	<div class="grpelem" id="u2394"><!-- custom html -->
		<div class="total-box" align="center"><b><?php $transactionsresult = mysql_query(""); echo mysql_result($transactionsresult, 0); ?></b> Transactions In The Last 90 Days</div>
		<div class="feed-box">
		<h5>Top 10 Most Logged Transactions - 90 Days</h5>
		<ul class="generic-list">
		<?php

			$topresult = mysql_query("")
			or die (mysql_error());
			
			while($toprow = mysql_fetch_assoc($topresult)){
				$topvariantresult = mysql_query("")
				or die (mysql_error());
				$topvariantrow = mysql_fetch_array($topvariantresult);
			
				$topbeerresult = mysql_query("")
				or die (mysql_error());
				$topbeerrow = mysql_fetch_array($topbeerresult);
				
				$topbrewresult = mysql_query("")
				or die (mysql_error());
				$topbrewrow = mysql_fetch_array($topbrewresult);
				
				$topphotoresult = mysql_query("")
				or die (mysql_error());
				$topbeerphoto = mysql_fetch_array($topphotoresult);
				
				echo '<li>';
				if(empty($topbeerphoto['PhotoID'])){
					echo "<a href='beerprofile.php?link=".$topbeerrow['BeerID']."&var=".$topvariantrow['VariantID']."' class='img-holder'><img src='http://beerblackbook.com/images/default.png' alt='Default Image'></a>";
				}else{
					echo "<a href='beerprofile.php?link=".$topbeerrow['BeerID']."&var=".$topvariantrow['VariantID']."' class='img-holder'><img src='http://beerblackbook.com/img/beers/".$topbeerphoto['PhotoID'].".jpg' alt='Selected Beer Image'></a>"; 
				}
				echo '<div class="feed-text-holder">';
				echo '<p>';
				echo "<b><a href='beerprofile.php?link=".$topbeerrow['BeerID']."&var=".$topvariantrow['VariantID']."' style='color:#000;font-size:16px;text-decoration:none;'>".$topbeerrow['BeerName']."<span class='variant'> ".$topvariantrow['BottleSize']." (".$topvariantrow['Year'].")</a></span></b><br />";
				echo "<span class='whitebox_title'>Sold by <a href='breweryprofile.php?link=".$topbeerrow['BreweryID']."' style='color:#BE4040;text-decoration:none;'><b>".$topbrewrow['BreweryName']."</b></a></span><br />";
				echo "<span class='feed-note'> Total Logged Transactions: ".$toprow['count_var']."</span></p>";
				echo '</p>';
				echo '</div>';
				echo '</li>';
			}
		?>
		</ul>
		</div>
	</div>
	</div>
	<!-- TOP 10 MOST LOGGED TRANSACTIONS - 90 Days end ////////////////////////////// -->
	</div>
	   
	   
		</div>
		

		
	</div>
	

	
</div>
	
	<div class="verticalspacer"></div>
		<div class="clearfix colelem" id="u1875"><!-- group -->
			<div class="clearfix grpelem" id="u1438-4"><!-- content -->
				<p>© 2015 BeerBlackBook, LLC.</p>
			</div>
			<a class="nonblock nontext clearfix grpelem" id="u1868-4" href="faq.php"><!-- content --><p>FAQ</p></a>
			<a class="nonblock nontext clearfix grpelem" id="u1870-4" href="terms.php"><!-- content --><p>Terms and Conditions</p></a>
			<a class="nonblock nontext clearfix grpelem" id="u1872-4" href="privacy.php"><!-- content --><p>Privacy Policy</p></a>
			<a class="nonblock nontext clearfix grpelem" id="u1873-4" href="contact.php"><!-- content --><p>Contact Us</p></a>
		</div>
		
			<div class="clearfix colelem" id="u1437-4"><!-- content -->
				<p>The contents of this website are not intended to promote the resale of alcohol and serves only as a reference for entertainment purposes only.</p>
			</div>
		</div>
	</div>
	
<?php
	mysql_close();
?>
</body>
</html>
