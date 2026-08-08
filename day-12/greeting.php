<?php
$name = "Komal";
$hour = date("H")
if ($hour < 12){
    $greeting = "Good Morning ☀️";
    $message = "Start your day with focused coding practice.";
} elseif ($hour < 18){
    $greeting = "Good Afternoon  🌤️";
    $message = "Keep learning and building new project.";
} else {
    $greeting = "Good Evening  🌙";
    $message = "Finish your coding target before you stop.";
}
$day = date("1");
$date = date("d F Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin
            
        }
    </style>
</head>
<body>
    <main class="card">
         
    </main>
    <script>
        function showMessage(){
            alert("You are practicing Core PHP today!");
        }
    </script>
</body>
</html>