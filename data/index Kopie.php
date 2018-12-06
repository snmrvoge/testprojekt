<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<LINK REL=StyleSheet HREF="css/index.css" TYPE="text/css">
<?php
$screen_breite = 1920;
$screen_hoehe = 1080;
$oben_x = 418269;
$oben_y = 335804;
$unten_x = 919086;
$unten_y = 43292;
$breite_pixel = ($unten_x-$oben_x)/$screen_breite;
$hoehe_pixel = ($oben_y-$unten_y)/$screen_hoehe;
//
$p1_x = 645766;
$p1_y = 248962;

//$p1_x = 746581;
//$p1_y = 254811;



//  2'746'581.0, 1'254'811.1
//
$p1_left = ($p1_x-$oben_x)/$breite_pixel;
$p1_height = ($oben_y-$p1_y)/$hoehe_pixel; 

function umrechnen($korx, $kory, $punkt) {
	global $oben_x, $breite_pixel, $oben_y, $hoehe_pixel;
	$p1_left = ($korx-$oben_x)/$breite_pixel;
    $p1_height = ($oben_y-$kory)/$hoehe_pixel; 
            echo "Punkt : $p1_left";
            echo "<br>Punkt : $p1_height<br />"; ?>
<style>#punkt<?php echo $punkt; ?> { position: absolute; left: <?php echo round($p1_left,0); ?>px; top: <?php echo round($p1_height,0); ?>px; min-height: 30px; min-width: 30px; background: url(bilder/punkt.gif) repeat;opacity: 0.32; }</style>
<a href="#" id="punkt<?php echo $punkt; ?>">&nbsp;</a><?php 
         }

umrechnen(607400, 171296.3, 5);

?>
<style>
#punkt3 { position: absolute; left: 792px; top: 606px; min-height: 30px; min-width: 30px; background: url(bilder/punkt.gif) repeat;opacity: 0.32; }
#punkt4 { position: absolute; left: <?php echo $p1_left; ?>px; top: <?php echo $p1_height; ?>px; min-height: 30px; min-width: 30px; background: url(bilder/punkt.gif) repeat;opacity: 0.32; }
</style>
</head>  
<body bgcolor="white">
<?php umrechnen(593928, 120210, 7); ?>
<img src="bilder/ch_karte.png" alt="02" width="1920" height="1080" usemap="#hindergrund" />
<?php echo "<br />Hallo"; ?>
<?php echo "<br />Breite Pixel :".$breite_pixel; ?>
<?php echo "<br />Hoehe Pixel :".$hoehe_pixel; ?>
<?php echo "<br />1 Left Pixel :".$p1_left; ?>
<?php echo "<br />1 Height Pixel :".$p1_height; ?>
<a href="html/1.html" id="lang_de"></a>
<a href="#" id="punkt1">&nbsp;</a>
<a href="#" id="punkt2">&nbsp;</a>
<a href="#" id="punkt3">&nbsp;</a>
<a href="#" id="punkt4">&nbsp;</a>
</body>
</html>