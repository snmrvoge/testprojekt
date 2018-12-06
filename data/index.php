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
$oben_y = 315804;
$unten_x = 919086;
$unten_y = 43292;
$breite_pixel = ($unten_x-$oben_x)/$screen_breite;
$hoehe_pixel = ($oben_y-$unten_y)/$screen_hoehe;
$p_count = 1;
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
    $p1_height = ($oben_y-$kory)/$hoehe_pixel; ?>
#punkt<?php echo $punkt; ?> { position: absolute; left: <?php echo round($p1_left,0); ?>px; top: <?php echo round($p1_height,0); ?>px; min-height: 30px; min-width: 30px; background: url(bilder/punkt<?php echo rand(1,6);?>.gif) repeat;opacity: 0.32; }
<?php 
         }
?>
<style>
<?php
umrechnen(600723.7,199221.6,2);
umrechnen(600336.3,200007.9,3);
umrechnen(610239.7,265130.9,5);
umrechnen(691962.2,208600.1,6);
umrechnen(681742.0,224361.0,8);
umrechnen(681603.0,224457.8,9);
umrechnen(572818.2,159329.9,10);
umrechnen(579038.8,183924.3,11);
umrechnen(500836.8,117549.9,12);
umrechnen(554961.5,188795.5,13);
umrechnen(683783.5,247881.5,14);
umrechnen(697920.8,261369.5,15);
umrechnen(657883.3,259744.9,16);
umrechnen(683783.5,247881.5,17);
umrechnen(657975.0,259684.4,18);
umrechnen(611464.3,267039.1,19);
umrechnen(600811.8,199114.0,20);
umrechnen(665573.7,211509.5,21);
umrechnen(661567.0,194413.4,22);
umrechnen(709758.7,268190.6,24);
umrechnen(691953.5,192578.3,25);
umrechnen(707400.0,271296.3,27);
umrechnen(801723.0,133880.5,28);
umrechnen(623090.5,189291.1,29);
umrechnen(760114.5,184146.0,30);
umrechnen(674376.5,215945.6,31);
umrechnen(724093.0,211032.8,32);
umrechnen(596944.8,226467.8,33);
umrechnen(683800.0,247201.1,34);
umrechnen(611653.7,267050.1,35);
umrechnen(600336.3,200007.9,36);
umrechnen(666373.5,211434.3,37);
umrechnen(634987.6,244449.9,38);
umrechnen(607487.0,228835.6,39);
umrechnen(746581.0,254811.1,40);
umrechnen(707400.0,271296.3,42);
umrechnen(697324.5,262008.1,43);
umrechnen(499732.3,115588.9,44);
umrechnen(593928.2,120210.7,45);
umrechnen(720292.3,081291.8,46);
umrechnen(538249.3,152795.4,47);
umrechnen(594032.6,120329.6,48);
umrechnen(578700.0,184102.7,49);
umrechnen(500652.5,117244.1,50);
umrechnen(561720.6,204616.3,51);
umrechnen(540271.7,151150.5,52);
umrechnen(540271.8,151144.9,53);
umrechnen(547742.8,212268.6,54);
umrechnen(594302.8,120311.8,55);
umrechnen(539138.5,181091.1,56);
umrechnen(538329.7,152630.0,57);
umrechnen(507839.4,137458.6,58);
umrechnen(553864.2,216774.1,59);
umrechnen(554423.4,145756.0,60);
umrechnen(717342.5,095822.6,61);
umrechnen(704669.3,113918.4,62);
umrechnen(717021.5,095372.1,63);
umrechnen(717170.8,095801.5,64);
umrechnen(748981.1,244090.6,65);
umrechnen(656209.2,248572.1,67);
umrechnen(611459.3,267389.4,68);
umrechnen(682918.3,248604.1,69);
umrechnen(697673.3,261853.4,70);
umrechnen(585100.3,220926.9,71);
umrechnen(697220.5,261888.3,72);
umrechnen(689846.7,283377.1,73);
umrechnen(682772.3,248008.1,74);
umrechnen(578963.5,183582.4,75);
umrechnen(718803.9,081105.9,76);
umrechnen(704510.8,114026.1,77);
umrechnen(754988.9,260597.7,78);
umrechnen(759760.5,190686.6,79);
umrechnen(605389.6,210765.4,80);
umrechnen(643557.4,263328.5,81);
umrechnen(619031.5,170922.1,82);
umrechnen(614606.0,178783.9,83);
umrechnen(724659.0,207877.6,84);
umrechnen(676298.8,235854.9,85);
umrechnen(783826.2,151845.8,86);
umrechnen(610581.0,267766.5,87);
umrechnen(721480.5,258676.3,90);
umrechnen(746206.3,254245.0,91);
umrechnen(666478.7,211951.6,92);
umrechnen(723335.8,217729.8,93);
umrechnen(608350.3,220714.0,94);
umrechnen(724634.0,242738.8,95);
umrechnen(560235.3,171629.5,96);
umrechnen(671088.8,200921.8,97);
umrechnen(683559.0,247619.0,98);
?>
</style>
</head>  
<body bgcolor="white">
<img src="bilder/ch_karte.png" alt="02" width="1920" height="1080" usemap="#hindergrund" />
<?php /*
echo "<br />Hallo";
echo "<br />Breite Pixel :".$breite_pixel;
echo "<br />Hoehe Pixel :".$hoehe_pixel;
echo "<br />1 Left Pixel :".$p1_left;
echo "<br />1 Height Pixel :".$p1_height;
*/ ?>
<?php
for ($x = 01; $x <= 98; $x++) { ?>
<a href="#" id="punkt<?php echo $x; ?>">&nbsp;</a><br />
<?php } ?>
</body>
</html>