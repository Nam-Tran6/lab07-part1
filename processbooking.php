<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Form" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
</head>

<body>
<?php
    function sanitise_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // sanitise the input
    $name = sanitise_input($_POST["name"]);
    $number = sanitise_input($_POST["number"]);
    $pets = isset($_POST["pet"]) ? $_POST["pet"] : []; // Handle checkboxes, the code explanation is below
    
    /* isset($_POST["pet"]): This checks if the form field "pet" has been submitted (i.e., if it exists in the $_POST array).
        ? $_POST["pet"]: If the "pet" field is set, the value of that field is assigned to the $pets variable.
        : []: If the "pet" field is not set, an empty array [] is assigned to the $pets variable.
        You can have if by ? and else by :
    */
    $teacher = sanitise_input($_POST["teacher"]);
    $birthday = sanitise_input($_POST["birthday"]);
    $comments = sanitise_input($_POST["comments"]);
}

?>
</body>

