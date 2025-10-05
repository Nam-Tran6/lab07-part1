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
    $marks = array (85,85,95); //creates a array stored in marks
    $marks[1] = 90; //Note that 0 is 1, and vice versa
    $ave = (($marks[0] + $marks[1] + $marks[2]) / 3); //seems inefficient
    if ($ave >= 50)  //More then 50
        $status = "Passed";
    else
        $status = "Failed"; //Less than 50

    echo "<p>The average score is $ave, so you $status.</p>"
?>

</body>
</html>