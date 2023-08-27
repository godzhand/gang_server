<?php
include ('connect.php');
$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);
$emailId = trim($_POST['emailId']);
$password = trim($_POST['pwd']);
if ((isset($firstName) && !empty($firstName)) && (isset($lastName) && !empty($lastName)) && (isset($emailId) && !empty($emailId)) && (isset($password) && !empty($password))) {
    $query = "insert into user (first_name, last_name, email_id, password) values ('$firstName', '$lastName', '$emailId', '$password')";
    $result = pg_query($query);
    if (!$result) {
        $errormessage = pg_last_error();
        echo "Error with query: " . $errormessage;
    } else {
        echo "User Registration Successfull!!!";
    }
} else {
    echo "Invalid input. Please enter all the input fields in form";
}
?>