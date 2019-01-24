<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>



<p>Hello <?php echo $_POST["username"];?></p>

<?php

if ($_POST["password"] == 'password') {
    echo "You have a rubbish password!<br><br>";
}
	else {
		echo "You have a good password!<br><br>";
	}
if ($_POST["password"] == 'grumpy' && $_POST["username"] == 'cat') {
	echo '<img src="cat.jpg" alt="icon" /><br>';
}
if ($_POST["color"] == 'red') {
	echo '<body style="background-color:red">';
}
	elseif ($_POST["color"] == 'green'){
	echo '<body style="background-color:green">';
	}
	elseif ($_POST["color"] == 'blue'){
	echo '<body style="background-color:blue">';
	}
?>
<br><br>
<a href="Index.php"> Page 1 </a>
</body>
</html>