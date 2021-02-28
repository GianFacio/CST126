<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="register.css">
<meta charset="utf-8" />
<title>Login Response</title>
</head>
<body>
	<h2>Login was successful: <?php echo " " . $username ?></h2>
    <a href="whoAmI.php" class="button">Who Am I</a>
    <a href="blog.html" class="button">Blog</a>
	<?php 
// 	include 'getAllUsers.php';
include '_displayUsers.php';
	?>

</body>
</html>