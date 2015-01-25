<?php header("Content-type:text/css"); 
$color = sprintf("#%06x",rand(0,16777215));
$h1_color = sprintf("#%06x",rand(0,16777215));
?>
p {
	color: <?php echo $color ;?> ;
}
h1 {
	color: <?php echo $h1_color; ?> ;
}
