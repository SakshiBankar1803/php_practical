<html>
<body>
<form method="post" action="#">
 1.asce order sort by value<br>
 2.asceding order sort by key <br>
 3.descending order sort by value <br>
 4.descending order sort by key <br>
enter choice::<br>
<input type="number" name="c">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$ch=$_POST['c'];
$a=array("sagar"=>"31","vickey"=>"41","leena"=>"39","ramesh"=>"40");
switch($ch)
{
  case 1:asort($a);
         print_r($a);
         break;

 case 2:ksort($a);
         print_r($a);
         break;

case 3:arsort($a);
         print_r($a);
         break;

case 4:krsort($a);
         print_r($a);
         break;
}
?>