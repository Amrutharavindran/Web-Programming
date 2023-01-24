<html>
<center>
<body bgcolor="lightyellow">
<h1><u>INDIAN CRICKET TEAM</u></h1>
<h4>Players Name:ROHIT SHARMA,HARDIK PANDYA,VIRAT KOHLI,RISHAB PANT,MS DHONI,JASPRIT BUMRAH,DINESH KARTHIK</h4>
<?php
$name=["ROHIT SHARMA","HARDIK PANDYA","VIRAT KOHLI","RISHAB PANT","MS DHONI","JASPRIT BUMRAH","DINESH KARTHIK"];
echo "Player table";
echo "<br>
<table border='2px'>
<tr>
<th>sl no.</th>
<th>player</th>";
for ($i=0;$i<7;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</center>
</body>
</html>

