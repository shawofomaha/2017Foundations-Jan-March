<style>
body {
	background-color: rgba(211,211,211,1.0);
	background-image: url("LAKE SUNSET OCT 2013.svg");
	background-repeat: no-repeat;
	background-size: cover;
}
html {
	font-size: 1em;
	font-family: sans-serif;
}
h1 {
	font-size: 2.5rem;
	text-align: center;
}
p {
	font-size: 1.25rem;
	width: 70%;
	padding-left: 7em;
	padding-right: 3em;
}

.modelOutputContainer {
	position: relative;
	left: 7.5%;
	background-color: rgba(211,211,211,0.4);
	border: 2px solid black;
	border-radius: 15px;
	padding-left: 7em;
	padding-right: 3em;	
	width: 65%;
}

.modelOutput {
	width: 70%;
	padding-left: 7em;
	padding-right: 3em;	
	font-size: 0.75rem;
	color: rgba(66,66,66,1.0);
}
</style>

<h1>Marko a <strong>PHP</strong> Dude</h1>

<?php
/*  This PHP program builds four paragraphs:
	1) Hello my name is
	2) Where I live and favorite candy, drink and tv show.
	3) Spare time for hobbies.
	4) Reveal if a Pet owner or not ...
 */
$hobbies = array( 'music',
                 'computers',
                 'baseball',
                 '',
                 'bird watching',
                 'PHP',
                 '',
                 'astronomy'
                );

// $pets = 'Pip'; 

$pets = array(  'BarbaraAnn',
	            'Pip',
                'TinTin',
                '',
                '',
                'CoCo'
   );
// $pets =   'PipAAAA'; // test no array
// $pets =   '';        // test empty string

$shawOfOmaha = array(

    'firstname'        => 'Mark',
    'lastname'         => 'Shaw',
    'middlename'       => 'ShawofOmaha',
    'address'          => '12424 C St',
    'city'             => 'Omaha',
    'favorite_candy'   => 'chocolate',
    'favorite_drink'   => 'water',
    'hobbies'          => $hobbies,
    'favorite_tv_show' => 'Royals baseball',
    'has_pets'         => true,
    'pet_names'        => $pets

);

//Move array info to variables, makes the para's read more 'normal'
$firstname         = $shawOfOmaha['firstname'];
$lastname          = $shawOfOmaha['lastname'];
$middlename        = $shawOfOmaha['middlename'];
$address           = $shawOfOmaha['address'];
$city              = $shawOfOmaha['city'];
$favorite_candy    = $shawOfOmaha['favorite_candy'];
$favorite_drink    = $shawOfOmaha['favorite_drink'];
$favorite_tv_show  = $shawOfOmaha['favorite_tv_show'];
$has_pets          = $shawOfOmaha['has_pets'];	
		
//Output para 1) Hello my name is
echo "<p>Hi! My name is  $firstname  <i>$middlename</i> $lastname. </p>";

//Output para 2) Where I live and favorite candy, drink and tv show.
echo "<p>I live at $address in $city. My favorite candy is $favorite_candy, my favorite drink is $favorite_drink, and I love watching $favorite_tv_show.</p>";

//Loop the hobbies array and build hobby para 3) Spare time for hobbies.
$numItems = count($hobbies); // know the length of array
$i = 0;
echo "<p>In my spare time, ";
foreach ($hobbies as $hobbys) {

    $emptyVariable = isset($hobbys[$i]);
    $i++;
    if ($emptyVariable) { // avoid null entries

        if ($i == 1) {
 
            switch ($numItems) {

                case 1:
                    if ($emptyVariable) {
                        echo "I enjoy one hobby $hobbys.";
                    } else {
                        echo " I need to find a hobby!";
                    }
                    break;

                default:
                    echo "I enjoy $hobbys, " ;
                    break;
            }
        } else if ($hobbys[$i]) {
            if ($numItems == $i) {
                echo "and $hobbys! </p>";
            } else {
                echo " $hobbys, " ;
            }
        }
    }
}


//Loop the Pet array and build the pet para 4) Reveal if a Pet owner or not ..
$numItems = count($pets);  // know the length of array
if ($has_pets) {

    echo "<p>I do have pets.";
    if (!is_array($pets) && $pets > " ") {
        echo " The pet's name is $pets.";
    } else {
    	if ($pets > " ") {
            // assume an array
            if ($numItems > 1) {
                echo " Their names are ";
            } else {
                echo " The name is ";
            }    		
    	}

        $j = 0;
        $emptyVariable = isset($pets[$j]);
        if ($emptyVariable) {  // avoid null entries open if(emptyVariable a)
            foreach ($pets as $pet) {
                $emptyVariable = isset($pet[$j]);
                $j++;
            if ($emptyVariable || $pet > " " ) { // avoid null entries 
            		if (($numItems) == $j) {
            			echo " and $pet! </p>";
            		} else {
					    switch ($numItems - 1) {
						    case 1 :			
							    echo $pet ;
							break;

						    case $i :			
							    echo "and $pet! </p>";
							break;	

						    default :		
							    echo " $pet,";
							break;
					    }//close switch
                    }//close if (( numItems - 1) == numItems) {				
         		}
		    }		
	    } 
	}//close if(emptyVariable a)   
} else {
	echo "I do not have pets.</p>";
}//close if ( shawOfOmaha['has_pets']


?>

<div class="modelOutputContainer">
	<p class="modelOutput"">
	Above, I tried to match the following outputs: </p>
	<p class="modelOutput">
	Hi! My name is *firstname* *middlename* *lastname*. </p>

	<p class="modelOutput">I live at *address*. My favorite candy is *favorite_candy*, my favorite drink is *favorite_drink*, and I love watching *favorite_tv_show*.</p>

	<p class="modelOutput">In my spare time, I enjoy *hobbies*.</p>

	<p class="modelOutput">I do (not) have pets. (Their names are *pet_names*.)</p>	
	</p>
</div>
<!-- <p> It is <?php echo date('z'); ?>th day of the month</p> -->