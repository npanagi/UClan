<!DOCTYPE html>
<html>
<body>
<h1>Page 1</h1>
<p>This is my page re my friend.</p>
<?php

$name = "Panayi";
echo "Hello Mr.".$name, ". You are the best!";

echo "<br><br>";

for ($i = 1; $i < 10; $i++){
	echo "$i <br>";
}

echo "<br>";

$myarray = array ("blue","green","red","yellow");

for ($i = 0; $i < count($myarray); $i++) {
	echo '<span style="color:'.$myarray[$i].';">This text is '.$myarray[$i].'.</span><br>';
}


?>

<br>

<form action="page2.php" method="post">
Username: <input type = "text" name = "username"><br>
<br>
Password: <input type = "password" name = "password"><br><br>
Red<input type = "radio" name = "color" value="red">
Green<input type = "radio" name = "color" value="green">
Blue<input type = "radio" name = "color" value="blue" checked>
<br>
<input type = "submit" value = "Submit">
</form>
<br>
<a href="page2.php"> Page 2 </a>

</body>

</html>