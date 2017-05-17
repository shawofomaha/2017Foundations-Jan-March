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
	width: 70%;
	padding-left: 7em;
	padding-right: 3em;
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

// $pets = array(  'Pip', 
// 				'TinTin', 
// 				'', 
// 				'', 
// 				'CoCo'
// 	);

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


$pets = array(  'PipAAAA',
                'BBBBBB',
                '',
                '',
                'CoCo'
   );

$numItems = count($pets);  // know the length of array
echo "*** a1";
if ($shawOfOmaha['has_pets'] == true) {

    echo "<p>I do have pets.";
    echo "*** a2<br>";
    if (is_string($shawOfOmaha['pet_names'])) {
    echo "*** a3<br>";
        echo " The pet's name is $shawOfOmaha[pet_names].";
    } else {
        echo "*** a4<br>";
        // assume an array
        if ($numItems > 1) {
            echo "*** a5<br>";
            echo " Their names are ";
        } else {
            echo "*** a6<br>";
            echo " The name is ";
        }
        echo "*** a7<br>";
        $j = 0;
        $emptyVariable = isset($pets[$j]);
        if ($emptyVariable) {  // avoid null entries
            echo "*** a8 emptyVariable= $emptyVariable  <br>";
            foreach ($pets as $pet) {
                $emptyVariable = isset($pet[$j]);
                echo "*** a9. emptyVariable= $emptyVariable<br>";
                echo is_string($emptyVariable)."*** a9b. :is_string.  p:$pet[$j]<br>";
                $j++;
            } 
            if ($emptyVariable) { // avoid null entries
echo "*** a10<br>";
					switch ($numItems) {
						case 1 :
echo "*** a11<br>";			
							echo $pet ;
							break;

						case $i :
echo "*** a12<br>";			
							echo "and $pet! </p>";
							break;	

						default :
echo "*** a13<br>";		
							echo " $pet, </p>";
							break;

					} 
echo "*** a14<br>";	
				}
         }
echo "*** a15<br>";
			}		
echo "*** a16<br>";
		} 
echo "*** a17<br>";
	} else {
echo "*** a18<br>";
	echo "I do not have pets.</p>";
}
echo "*** a22-exit<br>";

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