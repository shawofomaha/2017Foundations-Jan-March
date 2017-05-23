<style>
	html {
		font-family: Franklin Gothic Medium', Arial, sans-serif;
		font-size: 1em;
		background-color: rgba(42,42,211,0.17);
	}

	h1 {
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

    label, input, h1 {
        border: 1px solid yellow;
        display: block;
        width: 80%;
        left: 10rem;
        /*text-align: center;*/
    }

</style>

<div class="container">

	<h1>Week 3 - Please fill out this form</h1>
	<hr>

	<?php 
		if ( isset($_POST['submit']) ) {
			echo $_POST['firstname']." as the name the user submitted.";
		} 
	?>

  <?php if (!$_POST) { ?>
	<form method="POST" action="">
		<!-- // Name -->
	    <label for="firstname">First Name:</label>
	    <input type="text" name="firstname" id="firstname"><br/>

	    <label for="middlename">Middle Name:</label>
	    <input type="text" name="middlename" id="middlename"><br/>
	  
	    <label for="lastname">Last Name:</label>
	    <input type="text" name="lastname" id="lastname"><br/>

		<!-- // address	   -->
	    <label for="address1">Address Line 1:</label>
	    <input type="text" name="address1" id="address1"><br/>
	  
	    <label for="address2">Address Line 2:</label>
	    <input type="text" name="address2" id="address2"><br/>
	  
	    <label for="city">City:</label>
	    <input type="text" name="city" id="city"><br/>
	  
	    <label for="state">State:</label>
	    <input type="text" name="state" id="state"><br/>
	  
	    <label for="zipcode">Zipcode:</label>
	    <input type="text" name="zipcode" id="zipcode"><br/>


		<!-- // Demographic Favs Info -->
	    <label for="favorite_candy">Favorite candy:</label>
	    <input type="text" name="favorite_candy" id="favorite_candy"><br/>
	    
	    <label for="favorite_drink">Favorite drink:</label>
	    <input type="text" name="favorite_drink" id="favorite_drink"><br/>

	    <label for="favorite_tv_show">Favorite TV Show:</label>
	    <input type="text" name="favorite_tv_show" id="favorite_tv_show"><br/>
		

		<!-- // Hobbies	     -->
	    <label for="hobby1">Hobby 1st:</label>
	    <input type="text" name="hobby1" id="hobby1"><br/>
	 
	    <label for="hobby2">Hobby 2nd:</label>
	    <input type="text" name="hobby2" id="hobby2"><br/>
	   
	    <label for="hobby3">Hobby 3rd:</label>
	    <input type="text" name="hobby3" id="hobby3"><br/>


		<!-- // Pets -->
	  	<input type="radio" name="has_pets" value="true"> Yes I have pets<br>
	  	<input type="radio" name="has_pets" value="false" checked> No I do nothave pets<br>
	  
		    <label for="pet_names1">Pet name 1st:</label>
		    <input type="text" name="pet_names1" id="pet_names1"><br/>
		 
		    <label for="pet_names2">Pet name 2nd:</label>
		    <input type="text" name="pet_names2" id="pet_names2"><br/>
		   
		    <label for="pet_names3">Pet name 3rd:</label>
		    <input type="text" name="pet_names3" id="pet_names3"><br/>
	     
	    <!-- // Email        -->
	    <label for="email">Email:</label>
	    <input type="text" name="email" id="email"><br/>
    
  	<button type="submit">Submit</button>
  <?php } ?> 	
  </form>
</div>
<content>  
 <?php if ( $_POST ) { ?>  
		<!-- load hobbies -->
	<?php 
		$hobbies = array();
		$hobbiesCnt = 0;  
		$hobby1  = $_POST['hobby1'];
		$hobby2  = $_POST['hobby2'];
		$hobby3  = $_POST['hobby3'];

		load_array( $hobbies, $hobby1, $hobby2, $hobby3 );
		$hobbiesCnt = count($hobbies);
		
	    echo "<br/> hobby1    =$hobby1";
        echo "<br/> hobby2    =$hobby2";
        echo "<br/> hobby3    =$hobby3";
        echo "<br/> hobbiesCnt=$hobbiesCnt<br/>";
        var_dump($hobbies);


		//<-- load pets-->
		$pets      = array();
		$petsCnt   = 0;
		$petsname1 = $_POST['pet_names1'];
		$petsname2 = $_POST['pet_names2'];
		$petsname3 = $_POST['pet_names3'];
	    echo "<br/> petsname1 =$petsname1";
        echo "<br/> petsname2 =$petsname2";
        echo "<br/> petsname3 =$petsname3";
        echo "<br/> petsCnt=$petsCnt<br/>";
        var_dump($pets); 		

		load_array( $pets, $petsname1, $petsname2, $petsname3 );
		$petsCnt = count($pets); 
 
	 ?>

  <div>
    
		<p>Hi! My name is <?php echo "$_POST[firstname] $_POST[middlename] $_POST[lastname]."; ?>
		</p>
	
	 	<p>I live at <?php echo "$_POST[address1] $_POST[address2] $_POST[city], $_POST[state] $_POST[zipcode]."; ?> My favorite candy is <?php echo "$_POST[favorite_candy]"; ?>, my favorite drink is <?php echo "$_POST[favorite_drink]"; ?>, and I love watching <?php echo "$_POST[favorite_tv_show]"; ?>
        .</p>

		<p>In my spare time, I enjoy 
        <?php 

            list_array($hobbies);		
        ?>
	    </p>
	
	    <p>I do 
        <?php 
              if ( $_POST['has_pets'] != true ) {
                 echo "not have pets.";
              } else { 
                  echo " Their names are ";
                  list_array($pets);
              }
        ?>	
	    </p>
  <?php } ?> 
  </div>
  <div>	
    <?php 
		function load_array( $arrayName, $array_item1, $array_item2, $array_item3 ) {
			echo "entering load_array .$arrayName.$array_item1.$array_item2.$array_item3...";
			for ($i=1; $i > 2; $i++) { 
				$inItem = $_POST[$array_item];	
				echo " $i=i inItem=$inItem  arrayName=$arrayName";
				array_push($arrayName,$inItem);

			}
			 echo " count('$arrayName') =count $arrayName";
			 echo "exiting load_array .......";
		} 

		function list_array($array) {
			// echo " $array=$array";
			foreach($array as $item){ 
				if( $item == end($array) ){
					echo "and $item.";
				} else {
					echo "$item, ";
				}
			}
		}
 	?>
  </div>		 
</content>