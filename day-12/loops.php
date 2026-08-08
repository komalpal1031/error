<?php 
echo "<h2>PHP Loops</h2>";
echo "<h3>1. for Loop</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<hr>";
echo "<h3>2. while Loops</h3>";
$num = 1;
while ($num <= 5) {
echo "Number : $num <br>";
$num++;
}
echo "<hr>";

echo "<h3>3. do... while Loop</h3>";
$count = 1;
do {
    echo "Count : $count <br>";
    $count++;
} while ($count <= 5);
echo "<hr>";

echo "<h3>4. foreach Loop</h3>";
$colors = ["Red", "Green", "Blue", "Yellow"];
foreach ($colors as $color) {
    echo $color . "<br>";
}
echo "<hr>";

echo "<h3>5. break Statement</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
            break;
        }
        echo $i . "<br>";
    }

    echo "<hr>";
    echo "<h3>6. continue Statement</h3>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 6) {
            continue;
        }
        echo $i . "<br>";
    }
    echo "<hr>";
    echo "<h3>7. Table of 10</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "10 × $i = " . (10 * $i) . "<br>";
    }

    ?>

