<style>
h1 {
	font-size: 1em;
}
</style>
<h1>Marko Dude</h1>
<!--<?php echo date("l"); ?>-->
<?php echo date("G:ia l"); ?>
<?php date_default_timezone_set('America/Chicago'); ?>
<!--<?php phpinfo(); ?>-->
 <?php $a = "long time ago"; $b = 3.14; $c = true; ?>

<?php var_dump($a, $b, $c  ); ?>

<?php 
 $myName = array('Dude' => "man",
 				 'NotDude' => "woman",
 				  );
 echo "<br />";
 var_dump($myName);
  echo "<br />";
 echo $myName['Dude'];
   echo "<br />";
 echo $myName['NotDude'];
    echo "<br />";
 echo $myName['Dude'];

 ?>
<!-- $GLOBALS  -->
 <<?php 
 echo "<br>";
 foreach ($_SERVER as $key => $value) {
 	echo "<strong>$key: =></strong> $value <pre>&#9;</pre>";
 }




  ?>

<p> It is <?php echo date('z'); ?>th day of the month</p>