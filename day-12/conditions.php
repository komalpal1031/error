<?php
echo "<h2>PHP Conditional Statements</h2>";

$age = 20;
echo "<h3>1. if Statement</h3>";
if ($age >= 18) {
    echo "You are eligible to Vote.<br>";
}
echo "<hr>";
$marks = 35;
echo "<h3>2. if...else</h3>";
if ($marks >= 40) {
    echo "Result : Pass<br>";
} else {
    echo "Result : Fail<br>";
}
echo "<hr>";

$percentage = 82;
echo "<h3>3. if.... elseif...else</h3>";

if ($percentage >= 90) {
    echo "Grade : A+";
} elseif ($percentage >= 75) {
    echo "Grade : A";
}elseif ($percentage >= 60) {
    echo "Grade : B";
}elseif ($percentage >= 40){
    echo "Grade : C";
} else {
    echo "Grade : Fail";
}

echo "<br><br>";
$username = "admin";
$password = "12345";

echo "<h3>4. Nested if</h3>";
if ($username == "admin") {
    if ($password == "12345"){
        echo "Login Successful";
    } else {
        echo "Wrong Password";
    }
} else {
    echo "User Not Found";
}
echo "<br><br>";

$day = "Wednesday";
echo "<h3>5. switch Statement</h3>";
switch ($day) {
    case "Monday":
        echo "Start of the week.";
        break;

        case "Tuesday":
            echo "Today is Tuesday.";
            break;

            case "Wednesday";
            echo "Midweek.";
            break;

            case "Thursday";
            echo "Today is Thursday.";
            break;

            case "Friday";
            echo "Weekend is near.";
            break;

            case "Saturday";
            echo "Holiday.";
            break;

            case "Sunday";
            echo "Rest Day";
            break;

            default:
            echo "Invalid Day.";
}
echo "<br><br>";
$number = 17;
 echo "<h3>6. Even or Odd</h3>";
 if ($number % 2 == 0) {
    echo "$number is Even";
 } else {
    echo "$number is Odd";
 }

 ?>
