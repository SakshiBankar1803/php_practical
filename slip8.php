<html>
<body>
<form method="post" action="#">
enter string1:: <input type="text" name="t1"><br>
enter string 2:: <input type="text" name="t2"><br>
<input type="radio" name="r" value="1">
 Find whether the small string appears at the start of the large string.<br>
<input type="radio" name="r" value="2">
 Find the position of the small string in the big string.<br>
<input type="radio" name="r" value="3">
  Compare both the string for first n characters, also the comparison should not be case sensitive.  
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$ch=$_POST["r"];
switch($ch)
{
  case 1:$pos=strpos($s1,$s2);
          if($pos!=0)
           echo("s2 not present at start s1");
          else
            echo("s2 present at start of s1");
          break;
 case 2:$pos=strpos($s1,$s2);
         echo $pos;
         break;
 case 3:$pos=strcasecmp($s1,$s2);
         echo $pos;
         break;
}
?>