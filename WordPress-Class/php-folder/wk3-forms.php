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

    label, input, h1, content, .postOutput {
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
	    <input type="text" name="hobbies[]" id="hobby1"><br/>
	 
	    <label for="hobby2">Hobby 2nd:</label>
	    <input type="text" name="hobbies[]" id="hobby2"><br/>
	   
	    <label for="hobby3">Hobby 3rd:</label>
	    <input type="text" name="hobbies[]" id="hobby3"><br/>


		<!-- // Pets -->
	  	<input type="radio" name="has_pets" value="true"> Yes I have pets<br>
	  	<input type="radio" name="has_pets" value="false" checked> No I do nothave pets<br>
	  
		    <label for="pet_names1">Pet name 1st:</label>
		    <input type="text" name="pets[]" id="pet_names1"><br/>
		 
		    <label for="pet_names2">Pet name 2nd:</label>
		    <input type="text" name="pets[]" id="pet_names2"><br/>
		   
		    <label for="pet_names3">Pet name 3rd:</label>
		    <input type="text" name="pets[]" id="pet_names3"><br/>
	     
	    <!-- // Email        -->
	    <label for="email">Email:</label>
	    <input type="text" name="email" id="email"><br/>
    
  	<button type="submit">Submit</button>
  <?php } ?> 	
  </form>
</div>
<content>  
 <?php if ( $_POST ) { ?>  
  <div class="postOutput">
    
		<p>Hi! My name is <?php echo "$_POST[firstname] $_POST[middlename] $_POST[lastname]."; ?>
		</p>
	 <?php 
	  ?>
	 	<p>I live at <?php echo "$_POST[address1] $_POST[address2] $_POST[city], $_POST[state] $_POST[zipcode]."; 
	 	?>  

	 	<?php if ($_POST['favorite_candy']) {
	 	 		echo "My favorite candy is $_POST[favorite_candy]"; 
	 		  } else {
	 			echo "I do not like candy,";
	 		  }
	 	
	 	?>

	 	<?php if ($_POST['favorite_drink']) {
	 	 		echo " my favorite drink is $_POST[favorite_drink],"; 
	 		  } else {
	 			echo " I do not have a favorite drink,";
	 		  }
	 	?>
	 	 
		<?php if ($_POST['favorite_tv_show']) {
	 	 		echo " and I love watching $_POST[favorite_tv_show]."; 
	 		  } else {
	 			echo " and I do not have a favorite tv show that I watch.";
	 		  }
	 	?>
        </p>

		<p> 
        <?php 
        	$hobbies = $_POST['hobbies'];
            listArray($hobbies, "In my spare time, I enjoy");		
        ?>
	    </p>
	
	    <p>
        <?php 
              if ( $_POST['has_pets'] !== true ) {
                 echo "I do not have pets.";
              } else { 
                  echo "I do have pets.  Their names are ";
                  $pets = $_POST['pets'];
                  listArray($pets, "I do have pets.  Their names are ");
                  echo "<br/>3  prtDataCnt=$prtDataCnt";
              }
        ?>	
	    </p>
  <?php } ?> 
  </div>
  <div>	
    <?php 

    	function countArrayValues($array)
    	{
    		$prtDataCnt = 0;
			foreach($array as $prtData){ 
				if ( $prtData ) {
					++$prtDataCnt; 
				}
			}
			return $prtDataCnt;
    	}

		function listArray($array, $prtString) 
		{
			$prtDataCnt = 0;
			countArrayValues($array);
			if ($prtDataCnt == 0 ) {
				if ($prtString == "In my spare time, I enjoy") {
					echo "I'm so busy I have any spare time for hobbies,";
				} else {
					echo "I haven't any,";
				}
				
				
			} else {
				echo "$prtString, ";
				foreach($array as $prtData){ 
					if ( $prtData ) {
						if( $prtData && $prtDataCnt == 1 ) {
							echo "and $prtData.";
						} else {
							echo "$prtData, ";
							--$prtDataCnt;
						}
					}
				}
			}
		}
 	?>
  </div>		 
</content>