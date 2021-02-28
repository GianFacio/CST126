<table>
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
</tr>  
<?php
include 'myfuncs.php';


// Creates Connection
$conn = dbConnect();

$sql = "SELECT ID, USERNAME, PASSWORD from users";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        echo "<tr><td>".$row["ID"]."</td><td>".
            $row["FIRST_NAME"]."</td><td>".
            $row["LAST_NAME"]."</td><tr>";
                
    }
    echo"Login Successful";
}
else {
    echo "Login Failed";
}

$conn->close();

?>