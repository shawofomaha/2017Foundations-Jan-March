<style>
body {
	background-color: rgba(211,211,211,1.0);
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
	font-size: 1.5rem;
	font-size: 1.25rem;

	/*width: 70%;*/
	/*padding-left: 7em;*/
	/*padding-right: 3em;*/
}

.modelOutput {
	width: 70%;
	padding-left: 14em;
	padding-right: 3em;	
	font-size: 0.75rem;
	color: rgba(155,155,155,1.0);
}
</style>
<h1>Marko aka a <strong>PHP</strong> Dude</h1>

<?php

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

$pets = array(  'Pip', 
				'TinTin', 
				'', 
				'', 
				'CoCo'
	);

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

echo "<p>Hi! My name is  $shawOfOmaha[firstname] <i>$shawOfOmaha[middlename]</i> $shawOfOmaha[lastname]. </p>";

echo "<p>I live at $shawOfOmaha[address] in $shawOfOmaha[city]. My favorite candy is $shawOfOmaha[favorite_candy],  my favorite drink is $shawOfOmaha[favorite_drink], and I love watching $shawOfOmaha[favorite_tv_show].</p>";

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


$pets = array(  '',
	            'Pip',
                'TinTin',
                '',
                '',
                'CoCo'
   );
// $pets =   'PipAAAA'; // test no array
// $pets =   '';        // test empty string


$numItems = count($pets);  // know the length of array
if ($shawOfOmaha['has_pets'] == true) {

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
	    } else {
	        echo "I do not have pets.</p>";
	   }//close if(emptyVariable a)   
   }//close if (is_string(shawOfOmaha['pet_names']
}//close if ( shawOfOmaha['has_pets']


?>

<p class="modelOutput" style="font-size: 1rem;">
 Above, I tried to match the following outputs: </p>
<p class="modelOutput">
Hi! My name is *firstname* *middlename* *lastname*. </p>

<p class="modelOutput">I live at *address*. My favorite candy is *favorite_candy*, my favorite drink is *favorite_drink*, and I love watching *favorite_tv_show*.</p>

<p class="modelOutput">In my spare time, I enjoy *hobbies*.</p>

<p class="modelOutput">I do (not) have pets. (Their names are *pet_names*.)</p>	



</p>

<!-- <p> It is <?php echo date('z'); ?>th day of the month</p> -->