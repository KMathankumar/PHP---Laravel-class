<?php 
// substring slicing

$a = "Welcome to the world of Antony";

// substr(string, start, length)
echo substr("$a", "3", "5"); 
// "3" means starting from index 3 (0-based), "5" means take 5 characters
// So output: "come "

echo substr("Antony", "3", "5");
// Starting from index 3: 't' is index 2, 'o' is index 3
// Takes 5 chars (if available) => "ony"
// Output: "ony"

// return carriage
$b = "Welcome to\r the world of Antony";
echo $b;
?>
