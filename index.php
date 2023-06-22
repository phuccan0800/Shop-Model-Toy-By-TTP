<?php
	session_start();
	define("productfolder","img/product/");
	define("productlargefolder","img/product_large/");
	define("tax",5);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="keywords" lang="en-us" content="Assumption University,Computer Store Project,Assumption University Project,PHP Project,ABAC Project">
<META NAME="Description" CONTENT="Assumption University PHP Final Project">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="WWfmdAzbuVnt8F45gamZG9yEZVSbWsU-rs93ZDsnh0M" />

<title>TTP MODELS SHOP</title>

<link rel="shortcut icon" href="img/logo.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://rawgit.com/trevanhetzel/let-it-snow/master/let-it-snow.css">

<script src="js/myjs.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
</head>

<?php
	$GLOBALS['cart'] ='';
	$GLOBALS['totalitems'] = 0;
	
	$page = $_GET['page'];
	$cart = $_GET['cart'];
        
	if($page == ''){
		$page = 'productlist';
	}

	if($cart == ''){
		$cart = 'all';
	}
	else{
		$GLOBALS['cart'] = $cart;
	}
?>

<body>
<div class="frame">
<div class="let-it-snow">
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="http://rawgit.com/trevanhetzel/let-it-snow/master/let-it-snow.min.js"></script>
		<script>
        $.letItSnow('.let-it-snow', {
            stickyFlakes: 'lis-flake--js',
            makeFlakes: true,
            sticky: true
        });
        </script>
	<?php require("topbanner.php") ?>
	<?php require("mainmenu.php") ?>
	<?php require("search.php") ?> 
    <div class="main_body">
            <?php require("menupanel.php") ?>
            
            <div class="bodypanel">
			<br>
                <?php require("bodybanner.php") ?>

				<div class="space3"></div>

                <?php 
					if(file_exists($page . '.php') == 1){
						require( $page . '.php');
					}
					else{
						require('productlist.php');
					}
				?>
			</div>     
        <div><img src="" width="850" height="13"/></div>
	</div>
<?php require("footer.php") ?>
</div>
</div>
<video id="video_background" playsinline="" autoplay="" muted="" loop="" poster="img/background_img.jpg">
									<source src="img/background_img.webm" type="video/webm">
									<source src="img/background_img.mp4" type="video/mp4">
							</video>
</body>
</html>

