
<style>
	html {
		font-family: 'Franklin Gothic Medium', Arial, sans-serif;
		font-size: 1em;
		background-color: rgba(42,42,211,0.17);
	}

	h1, h2 {
		color: rgba(192,192,252,1.0);  
		color: rgba(115,117,119,1.0);
		text-shadow: 0.0625rem 0.0625rem 0.125rem black, 0 0 3.5rem blue, 0 0 0.300rem rgba(42,42,211,0.47);
	}

	.container {
		width: 100%;
		max-width: 600px;
		margin: auto;
		margin-top: 2em;
}
hr {
	position: relative;
	width: 80%;
	left: -3.65rem;
}
h2 {
	/*background-color: rgba(115,117,119,1.0);*/
}
label, input, h2 {
	border: 1px solid yellow;
	display: block;
	width: 80%;
	left: 10rem;
	/*text-align: center;*/
}

</style>

<?php  
// $name     = $_POST['firstname'];
// $email    = $_POST['email'];
// $about    = $_POST['about'];
// $comments = $_POST['comments'];

// if  (#_POST){ ?>



<div class="container">

	<h2>Week 3 - Please fill out this form</h2>
	<hr>

	<!-- < ? php echo var_dump( $_POST ) ?> -->
	<?php 
		if ( isset($_POST['submit']) ) {
			echo $_POST['firstname']." as the name the user submitted.";
		} 
	?>
<!-- < ? php echo var_dump( $_GET ); ? >  -->

// < form method="POST" action="< ? php echo $_SERVER['PHP_SELF']; ? >"
<?php 
if (!$_POST) { ?>
	<form method="POST" action="">
	    <label for="firstname">First Name:</label>
	    <input type="text" name="firstname" id="firstname"><br/>

	    <label for="middlename">Middle Name:</label>
	    <input type="text" name="middlename" id="middlename"><br/>
	  
	    <label for="lastname">Last Name:</label>
	    <input type="text" name="lastname" id="lastname"><br/>
	   
	    <label for="favorite_candy">Favorite candy:</label>
	    <input type="text" name="lfavorite_candy" id="favorite_candy"><br/>
	    
	    <label for="favorite_drink">Favorite drink:</label>
	    <input type="text" name="favorite_drink" id="favorite_drink"><br/>
	    
	    <label for="hobby1">Hobby 1st:</label>
	    <input type="text" name="hobby1" id="hobby1"><br/>
	 
	    <label for="hobby2">Hobby 2nd:</label>
	    <input type="text" name="hobby2" id="hobby2"><br/>
	   
	    <label for="hobby3">Hobby 3rd:</label>
	    <input type="text" name="hobby3" id="hobby3"><br/>
	    
	    <label for="favorite_tv_show">Favorite TV Show:</label>
	    <input type="text" name="favorite_tv_show" id="favorite_tv_show"><br/>

	  	<input type="radio" name="has_pets" value="true"> Yes I have pets<br>
	  	<input type="radio" name="has_pets" value="false" checked> No I do nothave pets<br>
	  
	    <label for="pet_names1">Pet name 1st:</label>
	    <input type="text" name="pet_names1" id="pet_names1"><br/>
	 
	    <label for="pet_names2">Pet name 2nd:</label>
	    <input type="text" name="pet_names2" id="pet_names2"><br/>
	   
	    <label for="pet_names3">Pet name 3rd:</label>
	    <input type="text" name="pet_names3" id="pet_names3"><br/>
	           
	    <label for="email">Email:</label>
	    <input type="text" name="email" id="email"><br/>
    
  	<button type="submit">Submit</button>
</form>
<?php } ?> 
</div>
	<?php 
	if ($_POST) {
		<p>Hi! My name is <?php echo "$firstname $middlename $lastname".</p>
	}

	

	// $hobbies = array('coding', 'bicycling', 'watching NFL games');
	// $_POST = array
	// $josh = array(
	// 	'firstname'			=> 'Josh',
	// 	'lastname'			=> 'Collinsworth',
	// 	'middlename'		=> 'James',
	// 	'address'			=> '1707 N. 59th St',
	// 	'favorite_candy'	=> 'chocolate-covered pretzels',
	// 	'favorite_drink'	=> 'Tallgrass beer',
	// 	'hobbies'			=> $hobbies,
	// 	'favorite_tv_show' 	=> '30 Rock',
	// 	'has_pets'			=> true,
	// 	'pet_names'			=> array('Griff', 'Teddy Roosevelt')
	// );            

	// $firstname = $josh['firstname'];
	// $middlename = $josh['middlename'];
	// $lastname = $josh['lastname'];
	// $address = $josh['address'];

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
	 

	// echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
	//  ? >
	// <p>Hi! My name is <?php echo "$firstname $middlename $lastname"? >.</p>

	// <p>I live at <?php echo $address ? >. My favorite candy is <?php echo $josh['favorite_candy'] ? >, my favorite drink is <?php echo $josh['favorite_drink'] ? >, and I love watching <?php echo $josh['favorite_tv_show'] ? >.</p>

	// <p>In my spare time, I enjoy <?php list_array($josh['hobbies']); ? >.</p>

	// <p>I do <?php if( !$josh['has_pets'] ){ echo "not "; } ? >have 
	// <?php echo ( is_string($josh['pet_names'])) ? "a pet." : "pets."; ? >

	// <?php if($josh['has_pets']){
	// 	if( is_array($josh['pet_names']) ){
	// 		echo "Their names are ";
	// 		list_array( $josh['pet_names'] );
	// 	} else {
	// 		echo "Its name is $josh[pet_names]";
	// 	}
	// 	echo ".";
	// } ? ></p>

</div>
