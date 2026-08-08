<?php
echo "<h2>PHP Operators</h2>";
$a = 20;
$b = 10;

echo "<h3>Arithmetic Operators</h3>";
echo "a = $a <br>";
echo "b = $b <br><br>";

echo "Addition : " . ($a + $b) . "<br>";
echo "Subtraction : " . ($a - $b) . "<br>";
echo "Multiplication : " . ($a * $b) . "<br>";
echo "Division : " . ($a / $b) . "<br>";
echo "Modulus : " . ($a % $b) . "<br>";
echo "Power : " . ($a ** 2) . "<br><br>";

echo "<hr>";

echo "<h3>Assignment Operators</h3>";
$x = 10;
echo "Initial Value : $x <br>";

$x +- 5;
echo "After +- 5 : $x <br>";

$x -= 3;
echo "After -= 3 : $x <br>";

$x *= 2;
echo "After *= 2: $x <br>";

$x /= 4;
echo "After /= 4 : $x <br><br>";

echo "<hr>";

echo "<h3>Comparison Operators</h3>";
echo "20 == 10 : ";
var_dump($a == $b);
echo "<br>";

echo "20 != 10 : ";
var_dump($a != $b);
echo "<br>";

echo "20 > 10 : ";
var_dump($a > $b);
echo "<br>";

echo "20 < 10 :";
var_dump($a < $b);
echo ",br>";

echo "20 >= 10 : ";
var_dump($a >= $b);
echo "<br>";

echo " 20 <= 10 :";
var_dump($a <= $b);
echo "<br><br>";

echo "<hr>";

echo "<h3>Increment / Decrement</h3>";

$count = 5;
echo "Count : $count <br>";

$count++;
echo "After ++ : $count <br>";

$count--;
echo "After -- : $count <br><br>";

echo "<hr>";

echo "<h3>Logical Operators</h3>";
$isLoggedIn = true;
$isAdmin = false;

echo "AND (&&) : ";
var_dump($isLoggedIn && $isAdmin);
echo "<br>";

echo "OR (||) : ";
var_dump($isLoggedIn || $isAdmin);
echo "<br>";

echo "NOT (!) : ";
var_dump(!$isAdmin);
echo "<br><br>";

echo "<hr>";

echo "<h3>Ternary Operator</h3>";
$marks = 72;
$result = ($marks >= 40) ? "Pass" : "Fail";
echo "Marks : $marks <br>";
echo  "Result : $result <br><br>";

echo "<hr>";
echo "<h3>Null Coalescing Operator</h3>";
$name = null;
echo $name ?? "Guest User";

?>
