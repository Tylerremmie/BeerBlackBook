<!DOCTYPE html>
<html class="html" lang="en-US">
<head>
<?php
	include 'datalogin.php'; 
	// this page outputs the contents of the textarea if posted
    $searchOutput = ""; // set var to avoid errors
    if(isset($_POST['searchPost'])){
		$searchOutput = mysql_real_escape_string($_POST['searchPost']);
    }
?>
<script type="text/javascript">
	if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "jquery.watch.js", "beers.css"], "outOfDate":[]};
</script>

<!-- TABLE SORTER start-->
<script src="sorttable.js"></script>
<!-- TABLE SORTER end-->


<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<meta name="generator" content="2015.0.2.310"/>
<title>Search: <?php echo $_POST['searchPost']; ?></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/site_global.css?491975611"/>
<link rel="stylesheet" type="text/css" href="css/master_a-master.css?362534228"/>
<link rel="stylesheet" type="text/css" href="css/search.css?3889359957" id="pagesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/iefonts_beers.css?4233922653"/>
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
<style>
#totalBreweryList
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	width: 100%;
	text-align: left;
	border-collapse: collapse;
}
#totalBreweryList th
{
	font-weight: bold;
	font-size: 14px;
	padding: 10px 8px;
	color: #000000;
	background: #ffffff; 
}
#totalBreweryList td
{

	padding: 8px;
	color: #000;
}
#totalBreweryList .headspan
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
#totalBreweryList tr:hover td
{
	color:#ffffff;
	background: #BE4040;
}
#totalBreweryList tr:hover a { 
	color: #ffffff; 
}



#searchadHolderBannertop {
	background: transparent;
	width: 982px;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: 0px;
}
#searchadHolderBannerbottom {
	background: transparent;
	width: 982px;
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 0px;
}
#searchadHolder {
	background: transparent;
	height: 90px;
	width: 728px;
	margin: 0 auto;
}

.searchResults {
	background: #cccccc;
	width: 100%;
	margin:0 auto;
}

.searchResults p{
	font-weight: bold;
	font-size: 25px;
	padding-top: 25px;
    padding-left: 25px;
}

.foundResults {
	background: transparent;
	width: 100%;
	top: 75px;
}
.nofoundResults p {
	font-weight: bold;
	font-size: 55px;
	text-align: center;
	padding-top: 150px;
}
.searchReply {
	float:left;
    margin:0 auto;
}
.searchBar {
	float:right;
    margin:23px 25px 0px 0px;
	border:1px solid #cccccc;
}

.form-wrapper button {
    width: 50px;
	background: #BE4040;
	color: #fff;
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
	
    <div class="browser_width colelem" id="u2864-bw">
	<div id="u2864"><!-- group -->

	
	<div class="clearfix" id="u2864_align_to_page">
	
	<!-- SEARCH TABLE start ///////////////////////////// -->
	<div class="clearfix grpelem" id="u2865"><!-- group -->
	<div class="grpelem" id="u1542"><!-- custom html -->

	<div class="searchResults">
		<div class="searchReply">
		<?php echo "<p><span style=\"color:#BE4040;\">Search Results For:</span> ". $_POST['searchPost'] ."<p>"?>
		</div>
		<div class="searchBar">
		<form class="form-wrapper cf" action="http://www.beerblackbook.com/search.php" method="post">
			<input type="text" name="searchPost" size="40" id="searchPost" placeholder="Search..." required>
			<button type="submit"><i class="fa fa-search"></i></button>
		</form> 
		</div>
	</div>

	<div class="foundResults">
		<?php if(strlen($searchOutput) <= 0) : ?>
		<div class="nofoundResults">
			<p>No Results Found<p>
		</div>
		<?php else : ?>
			<?php
				$searchResult = mysql_query("")
					or die (mysql_error());
					$searchCount = mysql_num_rows($searchResult);
			?>
				<?php if($searchCount <= 0):?>
					<div class="nofoundResults">
						<p>No Results Found<p>
					</div>
				<?php else : ?>
					<table class="sortable" id="totalBreweryList" summary="List of All Brewerys">
					<thead>
					<tr>
					<th class="headspan" scope="col">Brewery Name:</th>
					<th class="headspan" scope="col">Beer + Variant Name:</th>
					<th class="headspan" scope="col">Style:</th>
					<th class="headspan" scope="col">Year:</th>
					<th class="headspan" scope="col">Bottle Size:</th>
					</tr>
					</thead>
					<tbody>
				<?php
					while($searchRow = mysql_fetch_array($searchResult)){
						echo "<tr>
						<td><a href='breweryprofile.php?link=".$searchRow['BreweryID']."' class=\"brewTable\"  style=\"display:block;\">". $searchRow['BreweryName'] ."</a></td>
						<td><a href='beerprofile.php?link=".$searchRow['BeerID']."&var=".$searchRow['VariantID']."' class=\"brewTable\"  style=\"display:block;\">". $searchRow['Beer'] ."</td>
						<td>". $searchRow['Style'] ."</td>
						<td>". $searchRow['Year'] ."</td>
						<td>". $searchRow['BottleSize'] ."</td>
						</tr>";
					}
				?>
					</tbody>
					</table>
				<?php endif; ?>
		<?php endif; ?>
	</div>
	
	</div>
	</div>
	<!-- SEARCH TABLE end ///////////////////////////// -->
	
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
