<?php
include 'myfuncs.php';

$username = htmlspecialchars($_POST['username']);
$userPassword = htmlspecialchars($_POST['password']);

$conn = dbConnect(); 

$sqlQuery = "SELECT * FROM milestone WHERE USERNAME = " . "'$username'" . " AND PASSWORD = " . "'$userPassword'";

$result = $conn->query($sqlQuery);


$rowsReturned = $result->num_rows;

if($rowsReturned === 1) {
    $row = $result->fetch_assoc();
    saveUserId($row['ID']);
    include('loginResponse.php');
} elseif($rowsReturned === 0) {
    $message = "Login Failed";
    include('loginFailed.php');
} elseif ($rowsReturned > 1){
    echo "There are multiple users registered.";
    echo $conn->error;
}
$conn->close();
?>