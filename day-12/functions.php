<?php
echo "<h2>PHP Functions</h2>";
function welcome(){
    echo "Welcome to Core PHP.<br>";
}
welcome();
echo "<hr>";

function greet($name) {
    echo "Hello, $name!<br>";
}
greet("Komal");
greet("Rohit");
greet("Ankit");

echo "<hr>";

function add($a, $b) {
    return $a + $b;
}
$result = add(20, 30);
echo "20 + 30 = $result <br>";
echo "<hr>";

function country($name, $country = "India") {
    echo "$name lives in $country.<br>";
}
country("Komal");
country("John", "USA");
echo "<hr>";

function student($name, $age, $course) {
    echo "Name : $name <br>";
    echo "Age : $age <br>";
    echo "Course : $course <br><br>";
}
student("Komal", 24, "PHP");
echo "<hr>";

$x = 100;
function demoScope(){
    $y = 50;
    echo "Inside Function<br>";
    echo "Y = $y <br>";
}
demoScope();
    echo "Outside Function<br>";
    echo "X = $x <br>;";
    echo "<hr>";
$a = 10;
$b = 20;

function total(){
    global $a, $b;
    echo "Total = " . ($a + $b) . "<br>";
}
total();
echo "<hr>";

function square(int $number) {
    return $number * $number;
}
echo "Squate = " . square(8) . "<br>";
echo "<hr>";

function fullName($first, $last) {
    return $first . " " . $last;
}
echo fullName("Komal", "Pal");
?>
