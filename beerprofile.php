<!DOCTYPE html>
<html class="html" lang="en-US">
<head>
<?php
include 'datalogin.php'; 
$linkID = (int)$_GET["link"];
$varID = (int)$_GET["var"];
$pagename = mysql_query("")
    or die (mysql_error());
	$beerpagename = mysql_fetch_array($pagename);
?>

<!-- TABLE SORTER start-->
<script src="sorttable.js"></script>
<!-- TABLE SORTER end-->


<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<meta name="generator" content="2015.0.2.310"/>
<title><?php echo $beerpagename['BeerName']; ?></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/site_global.css?491975611"/>
<link rel="stylesheet" type="text/css" href="css/master_a-master.css?362534228"/>
<link rel="stylesheet" type="text/css" href="css/beerprofile.css?4272608438" id="pagesheet"/>
<style>
#variantmenu{
    width: 100%;
   -webkit-appearance: menulist-button;
   height: 31px;
	border:0px;
    outline:0px;
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
.hide {
    display: none;
}
p#description {
	margin:0px 0px 0px 0px;
    font-size:12px;
	color: #BE4040;
	font-style: italic;
}
#beer-transactions
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	width: 100%;
	text-align: left;
	border-collapse: collapse;
	margin-top: 50px;
}
#beer-transactions th
{
	font-weight: bold;
	font-size: 14px;
	padding: 10px 8px;
	color: #000000;
	background: #ffffff; 
}
#beer-transactions td
{
	padding: 8px;
	color: #000;
}
#beer-transactions .headspan
{
	background: #BE4040;
	color: #ffffff; 
	font-weight: bold;
	font-size: 15px;
}
table.sortable tbody tr:nth-child(2n) td {
  background: #e6e6e6;
}
table.sortable tbody tr:nth-child(2n+1) td {
  background: #ffffff;
}
#beer-transactions tr:hover td {
	color:#ffffff;
	background: #BE4040;
}
#beer-transactions tr:hover a { 
	color: #ffffff; 
}
#beerADHolder {
	background: transparent;
	width: 484px;
	height: 80px;
	margin-top: 223px;
	position: relative;
	margin-right: -10000px;
	left: 575px;
	z-index: 53;
	text-align: center;
}
#beerADContent {
    display: inline-block;
	margin-top: 10px;
}
#beeradHolderBannerbottom {
	background: transparent;
	width: 982px;
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 0px;
}
#beeradHolderbottom {
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
<link rel="stylesheet" type="text/css" href="css/iefonts_beerprofile.css?4233922653"/>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(document).ready(function () {
	$('#variantmenu').change(function() {
		var to = $(this).val();
		if(to != 0) {
		  window.location = $(this).val();      
		}
	});
});
</script>
<!--[if lt IE 9]>
<script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<!--First SQL Query start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<?php
$beerresult = mysql_query("")
    or die (mysql_error());
	$beerrow = mysql_fetch_array($beerresult);
	
$brewresult = mysql_query("")
    or die (mysql_error());
	$breweryrow = mysql_fetch_array($brewresult);
	
$firstvariant = mysql_query("")
    or die (mysql_error());
	$firstvar = mysql_fetch_array($firstvariant);
	$variantCount = mysql_num_rows($firstvariant);
	
$firsttransaction = mysql_query("")
	or die (mysql_error());
	$transactioncount = mysql_num_rows($firsttransaction);

$varCheck = mysql_query("")
    or die (mysql_error());
	$varinfo = mysql_fetch_array($varCheck);
?>
<!--First SQL Query end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!--Variant Check start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<?php
if(empty($varinfo)){
	$varload = $firstvar['VariantID'];
	$varinfo['BottleSize'] = $firstvar['BottleSize'];
	$varinfo['Year'] = $firstvar['Year'];
}else{
	$varload = $varinfo['VariantID'];
}
?>
<!--Variant Check end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<div class="clearfix" id="page"><!-- DIV HOLDER A start-->
<div class="position_content" id="page_position_content"><!-- DIV B HOLDER start-->

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
		
<div class="clearfix colelem" id="pu2491"><!-- DIV C HOLDER start-->
<div class="browser_width grpelem" id="u2491-bw"><!-- DIV D HOLDER start-->

	<div id="u2491">
		<div class="clearfix" id="u2491_align_to_page">
			<div class="clearfix grpelem" id="u2485">
				<div class="clearfix colelem" id="pu2512">
					<div class="clearfix grpelem" id="u2512">
						<div class="grpelem" id="u2505"></div>
					</div>

		<!-- BEER TABLES/GRAPHS start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="colelem" id="u3131"><!-- custom html -->
		<table class="sortable" id="beer-transactions" summary="Beer Transactions">
		<thead>
		<tr>
		<th class="headspan" scope="col">Beer Name:</th>
		<th class="headspan" scope="col">Size:</th>
		<th class="headspan" scope="col">Year:</th>
		<th class="headspan" scope="col">Price:</th>
		<th class="headspan" scope="col">Date:</th>
		<th class="headspan" scope="col">Source:</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$latestTransactions = mysql_query("")
			or die (mysql_error());
		$color="1";	
		while($latestTrans = mysql_fetch_array($latestTransactions)){
				echo "<tr>
				<td>". $beerrow['BeerName'] . " " . $varinfo['VariantName'] ."</td>
				<td>". $varinfo['BottleSize'] ."</td>
				<td>". $varinfo['Year'] ."</td>
				<td>$". $latestTrans['Price'] ."</td>
				<td>". $latestTrans['transDate'] ."</td>
				<td>". $latestTrans['Source'] ."</td>
				</tr>";
		}	
		echo "</tbody></table>";
		?>
		</div>
		<!-- BEER TABLES/GRAPHS SECTION end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

		<!-- BEER COMMENTS SECTION start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="colelem" id="u3131"><!-- custom html -->
		<?php
		 //echo "BEER COMMENTS";
		?>
		</div>
		<!-- BEER COMMENTS SECTION end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		
				</div>
			</div>
		</div>

		
	</div>
		
		<!-- MAIN INFORMATION COLUMN start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u2971-6" data-muse-uid="U2971" data-muse-type="txt_frame"><!-- content -->
			<p id="u2971-2"><?php echo $beerrow['BeerName'] . " " . $varinfo['VariantName'] ; ?></p>
			<p id="u2971-4">
				<?php
				if(empty(($varinfo['BottleSize']) or ($varinfo['Year']))){
					echo $beerrow['Style']; 
				}else{
					echo $beerrow['Style'] . ", ". $varinfo['BottleSize'] ." (". $varinfo['Year'] .")"; 
				}
				?>
			</p>
			<p id="u2427-2"><?php echo "<br><a href='breweryprofile.php?link=".$beerrow['BreweryID']."' style='color:#BE4040;text-decoration:none;'>".$breweryrow['BreweryName']."</a>"; ?></p>
			<?php
				if(empty($breweryrow['State'])){
					echo "<p id=\"u2427-4\">". $breweryrow['City'] . ", " . $breweryrow['Country'] ."</p>";
				}else{
					echo "<p id=\"u2427-4\">". $breweryrow['City'] . ", ". $breweryrow['State'] ."</p>";
				}
			?>

		</div>
		<!-- MAIN INFORMATION COLUMN end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		
		<!-- BEERPROFILE PHOTOS start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="grpelem" id="u2972"><!-- custom html -->
		<?php 
			$photoresult = mysql_query("")
				or die (mysql_error());
			$beerphoto = mysql_fetch_array($photoresult);
			if(empty($beerphoto['PhotoID'])){
				echo "<div class='img-holder'><img src='http://beerblackbook.com/img/defaultlg.png'></div>"; 
			}else{
				echo "<div class='img-holder'><img src='http://beerblackbook.com/img/beers/".$beerphoto['PhotoID'].".jpg'></div>"; 
			}
		?>
		</div>
		<!-- BEERPROFILE PHOTOS end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		
		<!-- DROPDOWN MENU start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="grpelem" id="u2976"><!-- custom html -->
		<?php
			$variantmenuresult = mysql_query("")
				or die (mysql_error());
			echo "<form method='post'>";
			echo "<select name='variantmenu' id='variantmenu'>";
			echo "<option>Select a Variant:</option>";
			while($variantrow = mysql_fetch_array($variantmenuresult)){
				$transactiontotal = mysql_query("SELECT * FROM Transactions WHERE VariantID='".$variantrow['VariantID']."'")
					or die (mysql_error());
				$transactioncount = mysql_num_rows($transactiontotal);
				if(empty($variantrow['VariantName'])){
					echo "<option value=\"beerprofile.php?link=".$beerrow['BeerID']."&var=".$variantrow['VariantID']."\">" .$variantrow['BottleSize'] ." (". $variantrow['Year'] .") - ". $transactioncount ." Transactions</option>";
				}else{
					echo "<option value=\"beerprofile.php?link=".$beerrow['BeerID']."&var=".$variantrow['VariantID']."\">".$variantrow['VariantName'] . " - " .$variantrow['BottleSize'] ." (". $variantrow['Year'] .") - ". $transactioncount ." Transactions</option>";
				}
			}
			echo "</select>";
			echo "</form>";
		?>
		</div>
		<!-- DROPDOWN MENU end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		
		<!-- LARGE AD start ////////////////////////////// -->
		<div class="clearfix grpelem" id="beerADHolder">
			<div id="beerADContent">
				<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=beer066-20&o=1&p=26&l=ur1&category=computers_accesories&banner=12CKQQKWNWBNQ20V9X02&f=ifr&linkID=H2WVVDEBFGSVF2ZF" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
			</div>
		</div>
		<!-- LARGE AD end ////////////////////////////// -->
		

		<!-- 12 MONTH AVERAGE PRICE start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u3022"><!-- group -->
			<div class="clearfix grpelem" id="u3068"><!-- column -->
				<div class="clearfix colelem" id="u3023-6" data-muse-uid="U3023" data-muse-type="txt_frame"><!-- content -->
					<p>12 Month Average Price:</p>
				</div>
				<div class="clearfix colelem" id="u3024-4" data-muse-uid="U3024" data-muse-type="txt_frame"><!-- content -->
				<p>
				<?php 
					$totalavgprice = mysql_query("")
						or die (mysql_error());
					$totalavg = mysql_fetch_array($totalavgprice);
					
					if(empty($totalavg['TotalPriceAverage'])){
						echo "<SPAN STYLE=\"color: white; font-size: 14pt\">No Transactions Found</span>";
					}else{
						echo "$". $totalavg['TotalPriceAverage'];
					}
				?>
				</p>
				</div>
			</div>
		</div>
		<!-- 12 MONTH AVERAGE PRICE end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

		<!-- TOTAL TRANSACTIONS start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u3090"><!-- group -->
			<div class="clearfix grpelem" id="u3054"><!-- group -->
				<div class="clearfix grpelem" id="u3078"><!-- column -->
					<div class="clearfix colelem" id="u3080-4" data-muse-uid="U3080" data-muse-type="txt_frame"><!-- content -->
						<p>Total Transactions:</p>
					</div>
					<div class="clearfix colelem" id="u3079-4" data-muse-uid="U3079" data-muse-type="txt_frame"><!-- content -->
						<p>
							<?php
								$transactiontotal = mysql_query("")
									or die (mysql_error());
								$totalTrans = mysql_fetch_array($transactiontotal);
								echo $totalTrans['transCount'];
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- TOTAL TRANSACTIONS end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		 
		<!-- 90 DAY PRICE CHANGE start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u3106"><!-- group -->
		<div class="clearfix grpelem" id="u3107"><!-- group -->
		<div class="clearfix grpelem" id="u3108"><!-- column -->
			<div class="clearfix colelem" id="u3109-4" data-muse-uid="U3109" data-muse-type="txt_frame"><!-- content -->
				<p>90 Day Price Change:</p>
			</div>
			<div class="clearfix colelem" id="u3110-4" data-muse-uid="U3110" data-muse-type="txt_frame"><!-- content -->
				<p>
				<?php
					$latesttransprice = mysql_query("")
						or die (mysql_error());
					$latestprice = mysql_fetch_array($latesttransprice);
					
					$originalPrice = $totalavg['TotalPriceAverage'];
					$newPrice = $latestprice['avgPrice'];
					
					$priceChange = ((($newPrice / $originalPrice) - 1) * 100);
					
					if(empty($latestprice['avgPrice'])){
						echo "<SPAN STYLE=\"font-size: 14pt\">No Recent Transactions</span>";
					}else{
						if(($originalPrice) == ($newPrice)){
							echo "0%";
						}else{
							if ($priceChange < 0){
							echo "<span id=\"u3095\">▼ </span>". round(abs($priceChange), 2) ."%";
							}else{
							echo "<span id=\"u3095\">▲ </span>". round($priceChange, 2) ."%";
							}
						}
					}
				?>
				</p>
			</div>
		</div>
		</div>
		</div>
		 <!-- 90 DAY PRICE CHANGE end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

		<!-- LATEST TRANSACTION DATE start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u3091"><!-- group -->
			<div class="clearfix grpelem" id="u3092"><!-- group -->
				<div class="clearfix grpelem" id="u3094-4" data-muse-uid="U3094" data-muse-type="txt_frame"><!-- content -->
					<p>Latest Transaction Date:</p>
				</div>
			</div>
			<div class="clearfix grpelem" id="u3095-5" data-muse-uid="U3095" data-muse-type="txt_frame"><!-- content -->
				<p>
					<?php
						$latesttransdate = mysql_query("")
							or die (mysql_error());
						$latestdate = mysql_fetch_array($latesttransdate);
						
						if(empty($latestdate['transDate'])){
							echo "<SPAN STYLE=\"font-size: 14pt\">No Transactions Found</span>";
						}else{
							echo $latestdate['transDate'];
						}
					?>
				</p>
			</div>
		</div>
		<!-- LATEST TRANSACTION DATE end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

		<!-- LATEST TRANSACTION PRICE start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u3085"><!-- group -->
		<div class="clearfix grpelem" id="u3086"><!-- group -->
		<div class="clearfix grpelem" id="u3087"><!-- column -->
			<div class="clearfix colelem" id="u3089-4" data-muse-uid="U3089" data-muse-type="txt_frame"><!-- content -->
				<p>Latest Transaction Price:</p>
			</div>
			<div class="clearfix colelem" id="u3088-4" data-muse-uid="U3088" data-muse-type="txt_frame"><!-- content -->
			<p>		 
				<?php
					$latesttransprice = mysql_query("")
						or die (mysql_error());
					$latestprice = mysql_fetch_array($latesttransprice);
					
					if(empty($latestprice['latePrice'])){
						echo "<SPAN STYLE=\"font-size: 14pt\">No Transactions Found</span>";
					}else{
						echo "$". $latestprice['latePrice'];
					}
				?>
			</p>
			</div>
		</div>
		</div>
		</div>
		<!-- LATEST TRANSACTION PRICE end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

		<!-- 90 DAY AVERAGE start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="clearfix grpelem" id="u3096"><!-- group -->
		<div class="clearfix grpelem" id="u3097"><!-- group -->
		<div class="clearfix grpelem" id="u3098"><!-- column -->
			<div class="clearfix colelem" id="u3100-4" data-muse-uid="U3100" data-muse-type="txt_frame"><!-- content -->
				<p>90 Day Average Price:</p>
			</div>
			<div class="clearfix colelem" id="u3099-4" data-muse-uid="U3099" data-muse-type="txt_frame"><!-- content -->
			<p>
			<?php
				$latesttransprice = mysql_query("")
					or die (mysql_error());
				$latestprice = mysql_fetch_array($latesttransprice);

				if(empty($latestprice['avgPrice'])){
					echo "<SPAN STYLE=\"font-size: 14pt\">No Recent Transactions</span>";
				}else{
					echo "$". $latestprice['avgPrice'];
				}
			?>
			</p>
			</div>
		</div>
		</div>
		</div>
		<!-- 90 DAY AVERAGE end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		
				



</div><!-- DIV D HOLDER end-->
</div><!-- DIV C HOLDER end-->

		
		<!-- FOOTER start \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
		<div class="verticalspacer"></div>
		<div class="clearfix grpelem" id="pu1875"><!-- column -->
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
		<!-- FOOTER end \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

</div><!-- DIV B HOLDER end-->
</div><!-- DIV A HOLDER end-->

</body>
</html>
