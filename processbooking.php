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
    $firstname = sanitise_input($_POST["firstname"]);
    $lastname = sanitise_input($_POST["lastname"]);
    $species = isset($_POST["pet"]) ? $_POST["species"] : []; // Handle checkboxes, the code explanation is below
    
    /* isset($_POST["pet"]): This checks if the form field "pet" has been submitted (i.e., if it exists in the $_POST array).
        ? $_POST["pet"]: If the "pet" field is set, the value of that field is assigned to the $pets variable.
        : []: If the "pet" field is not set, an empty array [] is assigned to the $pets variable.
        You can have if by ? and else by :
    */
    $age = sanitise_input($_POST["age"]);
    $food = sanitise_input($_POST["food"]);

    // Validate Number (required)
    if (empty($firstname)) {
        echo "Number is required.<br>";
    } 

    // If all inputs are valid, display the form results
    if (!empty($firstname) && !empty($lastname)) {
        // Display the results
        echo "<h2>Your Submitted Favourites:</h2>";
        echo "<p><strong>First Name:</strong> $firstname</p>";
    }
}
?>
</body>

