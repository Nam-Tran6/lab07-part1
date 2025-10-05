<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, arrays, and operators</title>
    <!--I would add other Metas but this is just a trial and error page-->
</head>
<body>
    <h1>PHP Variables, arrays, and operators</h1>

<?php 
    $days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    echo "<p>The days of the week in English are:</p>";
    
    for ($i = 0;$i < 7; $i++){
        echo "$days[$i], ";
    }

    $frenchdays = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
    echo "<p>The days of the week in French are:</p>";
    
    for ($i = 0;$i < 7; $i++){
        echo "$frenchdays[$i], ";
    }
?>
</body>
</html>