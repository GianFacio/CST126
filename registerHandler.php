<?php
include 'myfuncs.php'; // import file's functions

$firstName = $lastName = "";


if (empty($_POST['firstName'])) {
    echo "The First Name is a required field and cannot be blank.";
} elseif (empty($_POST['lastName'])) {
    echo "The Last Name is a required field and cannot be blank.";
} else {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $username = htmlspecialchars($_POST['username']);
    $userPassword = htmlspecialchars($_POST['password']);
    $userEmail = htmlspecialchars($_POST['userEmail']);
    $userBirth = htmlspecialchars($_POST['userBirth']);
    $userStreet = htmlspecialchars($_POST['userStreet']);
    $userCity = htmlspecialchars($_POST['userCity']);
    $userState = htmlspecialchars($_POST['userState']);
    $userZip = htmlspecialchars($_POST['userZip']);
    $userCountry = htmlspecialchars($_POST['userCountry']);

    
    // Open MySQL connection with function call
    $conn = dbConnect();
    
    $sqlInsert = "INSERT INTO milestone (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD,EMAIL,BIRTHDATE,STREET_ADDRESS,CITY_ADDRESS,STATE_ADDRESS,ZIP_ADDRESS,COUNTRY_ADDRESS) VALUES('$firstName', '$lastName', '$username','$userPassword','$userEmail', '$userBirth','$userStreet','$userCity','$userState','$userZip','$userCountry')";
    
    if ($conn->query($sqlInsert) === TRUE) {
        echo "First Name is " . $firstName . "<br>";
        echo "Last Name is " . $lastName . "<br>";
        echo "You are now registered.<br>";
        
    } else {
        echo "Error experienced: " . $sqlInsert . "<br>" . $conn->error;
    }
    
    $conn->close();
    
}
?>