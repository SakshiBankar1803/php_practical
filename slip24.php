//slip24
<html>
<body>
<form method="POST" action="slip24.php">
Enter 1st File<br>
<input type="file"name="t1"><br>
Enter 2nd File<br>
<input type="file"name="t2">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$f=$_POST['t1'];
$s=$_POST['t2'];
if(!file_exists($f))
{
die("<br>$f does not exist");
}
if(!file_exists($s))
{
die("<br>$f does not exist");
}

$f1=fopen($f,'r');
$f2=fopen($s,'a');
$data=fread($f1,filesize($f));
fwrite($f2,$data);
fclose($f1);
fclose($f2);
echo("first file is append to second file");
?>