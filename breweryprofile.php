<!DOCTYPE html>
<html class="html" lang="en-US">
<head>
<?php
include 'datalogin.php'; 
$linkID = (int)$_GET["link"];
$breweryinfoquery = mysql_query("")
    or die (mysql_error());
	$breweryinfo = mysql_fetch_array($breweryinfoquery);
?>
<script type="text/javascript">
	if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "jquery.watch.js", "breweryprofile.css"], "outOfDate":[]};
</script>

<!-- TABLE SORTER start-->
<script src="sorttable.js"></script>
<!-- TABLE SORTER end-->


<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<meta name="generator" content="2015.0.2.310"/>
<title><?php echo $breweryinfo['BreweryName']; ?></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/site_global.css?491975611"/>
<link rel="stylesheet" type="text/css" href="css/master_a-master.css?362534228"/>
<link rel="stylesheet" type="text/css" href="css/breweryprofile.css?4230746009" id="pagesheet"/>
<style>
#breweryBeerList
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	width: 100%;
	text-align: left;
	border-collapse: collapse;
	margin-top: 50px;
}
#breweryBeerList th
{
	font-weight: bold;
	font-size: 14px;
	padding: 10px 8px;
	color: #000000;
	background: #ffffff;

}
#breweryBeerList td
{
	padding: 8px;
	color: #000;
}
#breweryBeerList .headspan
{
	background: #BE4040;
	color: #ffffff; 

	font-weight: bold;
	font-size: 15px;
}
a.brewTable:link 
{
	color:#000000;
	text-decoration:none;
}
a.brewTable:visited 
{
	color:#000000;
	text-decoration:none;
}
a.brewTable:hover 
{
	color:#BE4040;
	text-decoration:none;
}
table.sortable tbody tr:nth-child(2n) td {
  background: #e6e6e6;
}
table.sortable tbody tr:nth-child(2n+1) td {
  background: #ffffff;
}
.img-holder{
width:400px;
height:400px;
text-align:center;
display:inline-block;
background:#ffffff;
border-style: solid;
border-width: 0px;
border-color: #ddd;
}
.img-holder img{
height:400px;
width:auto
}
#breweryBeerList tr:hover td {
	color:#ffffff;
	background: #BE4040;
}
#breweryBeerList tr:hover a { 
	color: #ffffff; 
}
#brewADholderXLG {
	background: transparent;
	width: 483px;
	height: 306px;
	position: relative;
	padding-bottom: 0px;
}
#brewADholderLG {
	background: transparent;
	width: 483px;
	height: 275px;
	position: relative;
	padding-bottom: 0px;
}
#adContentLG {
    position: absolute;
    bottom: -6px;
    left: 0px;
}
#brewadHolderBannerbottom {
	background: transparent;
	width: 982px;
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 0px;
}
#brewadHolder {
	background: transparent;
	height: 90px;
	width: 728px;
	margin: 0 auto;
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
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/iefonts_breweryprofile.css?4233922653"/>
<![endif]-->
<!-- Other scripts -->
<script type="text/javascript">
	document.documentElement.className += ' js';
	var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
<script type="text/javascript">
	document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/kreon:n7,n3:all.js" type="text/javascript">\x3C/script>');
</script>
<!--[if lt IE 9]>
<script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
<![endif]-->
</head>
<body>
 
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
	
	<div class="clearfix colelem" id="pu2807"><!-- group -->
	<div class="browser_width grpelem" id="u2807-bw">
	<div id="u2807"><!-- group -->
	<div class="clearfix" id="u2807_align_to_page">
	<div class="clearfix grpelem" id="u2808"><!-- column -->
	<div class="clearfix colelem" id="pu3112"><!-- group -->
	
	<!-- BREWERY MAP start ///////////////////////////// -->
	<div class="grpelem" id="u3112"><!-- custom html -->
	<div class='img-holder'><img src='http://beerblackbook.com/img/defaultlg.png'></div>
	</div>
	<!-- BREWERY MAP end ///////////////////////////// -->
	
	<div class="clearfix grpelem" id="pu2810-4"><!-- column -->
	
	<!-- MAIN BREWERY INFORMATION start ///////////////////////////// -->
	<div class="clearfix colelem" id="u2810-4" data-muse-uid="U2810" data-muse-type="txt_frame"><!-- content -->
		<p><?php echo $breweryinfo['BreweryName']; ?></p>
		<p id="u2897-2"><?php echo $breweryinfo['Address']; ?></p>
		<?php
		if(empty($breweryinfo['State'])){
			echo "<p id=\"u2897-4\">". $breweryinfo['City'] . "</p>";
			echo "<p id=\"u2897-6\">". $breweryinfo['Country'] ."</p>";
		}else{
			echo "<p id=\"u2897-4\">". $breweryinfo['City'] . ", " . $breweryinfo['State'] . " " . $breweryinfo['Zip'] ."</p>";
			echo "<p id=\"u2897-6\">". $breweryinfo['Country'] ."</p>";
		}
		?>
		
		<!-- LARGE AD start ////////////////////////////// -->
		<?php if(empty($breweryinfo['Website'])) : ?>
		<div id="brewADholderXLG">
			<div id="adContentLG">
				<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=beer066-20&o=1&p=12&l=ur1&category=ce_2014tv&banner=0YDS6HCWRP08ZKR5B6G2&f=ifr&linkID=UJSUH7COLS45PZTG" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
			</div>
		</div>
		<?php else : ?>
			<p id="u2897-9"><?php echo "<a href='".$breweryinfo['Website']."' style='color:#BE4040;'>". $breweryinfo['BreweryName'] ."'s Website</a>"; ?></p>
			<div id="brewADholderLG">
				<div id="adContentLG">
					<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=beer066-20&o=1&p=12&l=ur1&category=ce_2014tv&banner=0YDS6HCWRP08ZKR5B6G2&f=ifr&linkID=UJSUH7COLS45PZTG" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				</div>
			</div>
		<?php endif; ?>
		<!-- LARGE AD end ////////////////////////////// -->
	</div>
	<!-- MAIN BREWERY INFORMATION end ///////////////////////////// -->

	</div>
	</div>
	
	<!-- BEER TABLE start ///////////////////////////// -->
	<div class="clearfix colelem" id="u2852"><!-- group -->
	<div class="grpelem" id="u3125"><!-- custom html -->
		<table class="sortable" id="breweryBeerList" summary="List of Beers">
		<thead>
		<tr>
		<th class="headspan" scope="col">Beer Name:</th>
		<th class="headspan" scope="col">Style:</th>
		<th class="headspan" scope="col">Total Transactions:</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$allBreweryBeers = mysql_query("")
			or die (mysql_error());
		$color="1";	
		while($breweryBeers = mysql_fetch_array($allBreweryBeers)){
				echo "<tr>
				<td width=\"60%\"><a href='beerprofile.php?link=".$breweryBeers['BeerID']."' class=\"brewTable\" style=\"display:block;\">". $breweryBeers['BeerName'] ."</a></td>
				<td width=\"20%\">". $breweryBeers['Style'] ."</td>
				<td width=\"20%\">". $breweryBeers['count_trans'] ."</td>
				</tr>";
		}	
		?>
		</tbody>
		</table>
	</div>
	</div>
	<!-- BEER TABLE end ///////////////////////////// -->
	
	<!-- BEER COMMENTS start ///////////////////////////// -->
	<div class="colelem" id="u3129"><!-- custom html -->
		<?php
		//echo "Brewery Comments";
		?>
	</div>
	<!-- BEER COMMENTS end ///////////////////////////// -->
	
	

	</div>
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
