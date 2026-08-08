<?php
$name = "Komal";
$age = 24;
$salary = 25000.50;
$isStudent = true;
$city = "Delhi";

define("COLLAGE", "ABC Collage");
const COUNTRY = "India";

echo "Name : " . $name . "<br>";
echo "Age : " . $age . "<br>";
echo "Salary : &38377;" . $salary . "<br>";
echo "Student : " . ($isStudent ? "Yes" : "No") . "<br>";
echo "City : " . $city . "<br><br>";

echo "Collage : " . COLLAGE . "<br>";
echo "Country : " . COUNTRY . "<br>";

echo "<h3>Data Type</h3>";
echo "Name type : ";
var_dump($name);
echo "<br>";

echo "Age Type : ";
var_dump($age);
echo "<br>";

echo "Salary Type : ";
var_dump($salary);
echo "<br>";

echo "Student Type";
var_dump($isStudent);
echo "<br>";

echo "City Type";
var_dump($city);
echo "<br><br>";

echo "<h3>Updating Variable</h3>";
$age = 25;
echo "Updated Age : " . $age . "<br>";

$course = "PHP";
$duration = "3 Months";
$fees = 5000;

echo "<br>";
echo "Course : $course <br>";
echo "Duration : $duration <br>";
echo "Fees : ₹$fees <br>";

?>