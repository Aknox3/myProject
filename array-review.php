<?php
/**
 * Created by PhpStorm.
 * User: Ashton Knox
 * Date: 1/16/2018
 * Time: 6:11 PM
 */

ini_set(E_all);
error_reporting(3);
$animals = array('panda','alpaca','boa');

function mySort($animals)
{
    //check if the first letter of the next word in the array comes first
    //if so, swap the positions of the two words
    for ($j = 0; $j < count($animals)-1; $j++) {
        for ($i = 0; $i < count($animals)-1; $i++) {
            if (substr($animals[$i], 0, 1) > substr($animals[$i+1],0,1)) {
                $temp = $animals[$i];
                $animals[$i] = $animals[$i + 1];
                $animals[$i + 1] = $temp;
            }
        }
    }
    return $animals;
}


echo "<h1> Initial Array </h1>";
print_r($animals);

echo "<p>";
echo "<h1> Sorted Array</h1>";
$animals = mySort($animals);
print_r($animals);

?>