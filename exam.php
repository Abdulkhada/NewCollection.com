<?php

$x=20;
$y=10;

echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo $x%$y;
echo "<br>";
echo $x**$y;
echo "<br>";

//echo phpinfo();
//PHP code go here



$open = fopen("C:\\xampp\\htdocs\\project\\week\\2.jpg", 'r');

if ($open) {
    echo $open;
    // You can read the file or perform operations here
    fclose($open);  // Close the file when done
} else {
    echo "Error opening file.";
}




?>