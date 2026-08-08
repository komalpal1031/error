<?php
$name = "Komal";
$age = 24;
$height = 5.2;
$isStudent = true;
// array
$skills = ["HTML", "CSS", "JavaScript", "PHP"];
$City = null;
 echo "=== USER INFORMATION =====<br><br>";
 echo "Name : " . $name . "<br>";
 echo "Age : " . $age . "<br>";
 echo "Height : " . $height . "<br>";

 echo "Student : ";

 if($isStudent){
    echo "Yes";
 } else {
    echo "No";
 }

 echo "<br><br>";
 echo "Skills<br>";
 foreach ($skills as $skill){
    echo "- " . $skill . "<br>";
 }
 echo "<br>";
 if ($city === null) {
    echo "City is not available";
 }
?>