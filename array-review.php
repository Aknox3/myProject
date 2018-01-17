<?php
/**
 * Created by PhpStorm.
 * User: Ashton Knox
 * Date: 1/16/2018
 * Time: 6:11 PM
 */

ini_set('error_reporting', E_ALL);
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

    for ($i = 0; $i < count($animals);$i++) {
       echo $animals[$i] . " ";
    }

    return $animals;
}

function addToArray($input, $animals)
{
    echo "Adding " .$input."...";
    if (!in_array($input, $animals))
    {
        array_push($animals, strtolower($input));
    }
    return $animals;
}
//sort the initial array
$animals = mySort($animals);

//add Goat to the array
echo "<p>";
$animals = addToArray("Goat",$animals);

//sort the newly Goat-ed array
echo "<p>";
$animals = mySort($animals);

//Add boa to the array (again)
echo "<p>";
$animals = addToArray("boa",$animals);

//sort an array which has not actually changed
echo "<p>";
$animals = mySort($animals);

$flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut","velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop","tiramisu"=>"Tiramisu");


?>