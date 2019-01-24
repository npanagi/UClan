<!DOCTYPE html>
<html>
<body>
<h1>Page 1</h1>
<p>This is my page re my friend.</p>
<?php

$name = "Panayi";
echo "Hello Mr.".$name, ". You are the best!";

echo "<br>";

for ($i = 1; $i < 10; $i++){
	echo "$i <br>";
}

echo "<br>";

$myarray = array ("blue","green","red","yellow");

for ($i = 0; $i < count($myarray); $i++) {
	echo '<span style="color:'.$myarray[$i].';">This text is '.$myarray[$i].'.</span><br>';
}

?>
</body>

</html>