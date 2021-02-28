<?php
include 'myfuncs.php'; // import file's functions

    $blog = htmlspecialchars($_POST['blog']);


    
    // Open MySQL connection with function call
    $conn = dbConnect();
    
    $sqlInsert = "INSERT INTO blog (BLOG) VALUES('$blog')";
    
    if ($conn->query($sqlInsert) === TRUE) {
        echo "";
        
        
    } else {
        echo "Error experienced: " . $sqlInsert . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
<html lang="en">
<head><style>
div {
  background-color: #ab9de4;
  color: #ffffff;
  border: 15px solid black;
  width: 1250px;
  padding: 50px;
  margin: 20px;
  text-indent: 5px;
    word-wrap: break-word;
}
</style>
    <link rel="stylesheet" href="register.css">
<meta charset="utf-8" />
<title>Blog Post</title>
</head>
<body>
    <h2>Post:</h2>
	<div><h2><?php echo "" . $blog ?></h2></div>
    <a href="blog.html" class="button">Post Another</a>
</body>
</html>