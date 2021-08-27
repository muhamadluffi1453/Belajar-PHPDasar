<?php 
//perulangan pada array
//bisa menggunakan for/foreach

$angka = [3,2,15,20,11,77,89,8,9,10,11];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.clear {clear:both;}
 	</style>
 </head>
 <body>
 	<?php for($i = 0; $i < count($angka); $i++) { ?>
 	<div class="kotak"><?= $angka[$i] ?></div>
 	<?php } ?>
 <div class="clear"></div>

 <?php foreach($angka as $ak){ ?>
 		<div class="kotak"><?php echo $ak; ?></div>
 <?php } ?>

 <div class="clear"></div>

 <?php foreach($angka as $ak): ?>
 	<div class="kotak"><?= $ak; ?></div>
 <?php endforeach; ?>
 </body>
 </html>