<?php

// PREAMBLE
// $word = "computer";

// $wordLength = strlen($word);
// echo $wordLength;
// echo "<br /><br />";


// GRABBING WORD LENGTH
// way one
// $dashes = "";
// for ($i = 0; $i < $wordLength; $i++) $dashes .= "_ ";
// echo $dashes;

// way two
// for ($i = 0; $i < $wordLength; $i++) echo "_ ";
// echo "<br /><br />";


// SELECTING RANDOM WORD FROM ARRAY
// $words = array("apple", "banana", "pear");
// // $word = $words[rand(0, count($words) - 1)]; // picking randomly from the array
// $word = $words[array_rand($words)]; // another way, picking randomly from the array
// echo $word;
// echo "<br /><br />";

// for ($i = 0; $i < strlen($word); $i++) echo "_ ";
// echo "<br /><br />";

// echo "<pre>";
// print_r($words);


// SELECTING RANDOM WORD FROM A TEXT FILE
// $words = file("./words.txt");

// $word = $words[array_rand($words)]; // another way, picking randomly from the array
// $word = rtrim($word);
// echo $word;
// echo "<br /><br />";

// echo strlen($word);
// echo "<br /><br />";

// for ($i = 0; $i < strlen($word); $i++) echo "_ ";
// echo "<br /><br />";


// DEALING WITH LETTER GUESSES
$words = file("./words.txt");

$word = $words[array_rand($words)]; // another way, picking randomly from the array
$word = rtrim($word);
echo $word;
echo "<br /><br />";

echo strlen($word);
echo "<br /><br />";

$guesses = ["a", "e"];

for ($i = 0; $i < strlen($word); $i++) {
    if (in_array($word[$i], $guesses)) echo $word[$i];
    else echo "_";
    echo " "; // for readability
}
echo "<br /><br />";
