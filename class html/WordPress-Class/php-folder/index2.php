 <h1>dude</h1>

<<?php 

echo "===========. hello<br/>";
$variable = null;

if ('x' !== 'y') {
    echo "yes<br/>";
    $variable = true;
} else {
    echo "no<br/>";
    $variable = false;
}

echo " variable=$variable <br/>";

echo PHP_EOL;

$variable = ('x' !== 'y') ? "yes" : "no";

echo " variable=$variable <br/>";
echo "===========";

 ?>
 
