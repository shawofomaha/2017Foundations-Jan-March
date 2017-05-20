<!-- <?php include "header.php"; ?> -->

<div class="container">

	<h2>Working with Associative Arrays</h2>

	<?php

	$hobbies = array('coding', 'bicycling', 'watching NFL games');

	$josh = array(
		'firstname'			=> 'Josh',
		'lastname'			=> 'Collinsworth',
		'middlename'		=> 'James',
		'address'			=> '1707 N. 59th St',
		'favorite_candy'	=> 'chocolate-covered pretzels',
		'favorite_drink'	=> 'Tallgrass beer',
		'hobbies'			=> $hobbies,
		'favorite_tv_show' 	=> '30 Rock',
		'has_pets'			=> true,
		'pet_names'			=> array('Griff', 'Teddy Roosevelt')
	);            

	$firstname = $josh['firstname'];
	$middlename = $josh['middlename'];
	$lastname = $josh['lastname'];
	$address = $josh['address'];

	function list_array($array){
		foreach($array as $item){ 
			if( $item == end($array) ){
				echo "and $item";
			} else {
				echo "$item, ";
			}
		}
	}

	?>

	<p>Hi! My name is <?php echo "$firstname $middlename $lastname"?>.</p>

	<p>I live at <?php echo $address ?>. My favorite candy is <?php echo $josh['favorite_candy'] ?>, my favorite drink is <?php echo $josh['favorite_drink'] ?>, and I love watching <?php echo $josh['favorite_tv_show'] ?>.</p>

	<p>In my spare time, I enjoy <?php list_array($josh['hobbies']); ?>.</p>

	<p>I do <?php if( !$josh['has_pets'] ){ echo "not "; } ?>have 
	<?php echo ( is_string($josh['pet_names'])) ? "a pet." : "pets."; ?>

	<?php if($josh['has_pets']){
		if( is_array($josh['pet_names']) ){
			echo "Their names are ";
			list_array( $josh['pet_names'] );
		} else {
			echo "Its name is $josh[pet_names]";
		}
		echo ".";
	} ?></p>

</div>
