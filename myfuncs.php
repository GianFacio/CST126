<?php
$user = (getenv('CLEARDB_DATABASE_USER', true) ?: getenv('CLEARDB_DATABASE_USER')) ?: 'root';
$password = (getenv('CLEARDB_DATABASE_PASSWORD', true) ?: getenv('CLEARDB_DATABASE_PASSWORD')) ?: 'root';
$db = (getenv('CLEARDB_DATABASE_DB', true) ?: getenv('CLEARDB_DATABASE_DB')) ?: 'blog';
$host = (getenv('CLEARDB_DATABASE_HOST', true) ?: getenv('CLEARDB_DATABASE_HOST')) ?: 'localhost';

function dbConnect() {
    global $host, $user, $password, $db;
    // Open MySQL connection
    $conn = new mysqli($host, $user, $password, $db);
    
    if($conn->connect_error) {
        echo $conn->connect_error;
    }
    return $conn;
}

// Func starts a PHP session with the user's id
function saveUserId($id) {
    session_start();
    $_SESSION['USER_ID'] = $id;
}

// Func returns ID from PHP session
function getUserId() {
    session_start();
    return $_SESSION['USER_ID'];
}

?>