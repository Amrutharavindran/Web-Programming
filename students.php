<html>
<body>
<h1>name of students</h1>
<?php
$name=["Minu","Amal","Robin","Siya","Dheeraj"];
$t=$name;
echo"Displaying using print_r<br>";
print_r($name);
echo"<br><br>";
echo"sorting using asort()<br>";
asort($name);
print_r($name);
echo"<br><br>";
echo"sorting using arsort()<br>";
arsort($t);
print_r($t);
?>
</body>
</html>

