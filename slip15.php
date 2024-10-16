<html>
<body>
<form method="post" action="#">
enter string::
 <input type="text" name="t1"><br>
1.select first five words from string<br>
2.convert string lower and then title<br>
3.pad string with * by both side<br>
4.remove leading whitespaces<br>
5.find reverse of string <br>
enter choice::
<input type="number" name="c">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$s=$_POST["t1"];
$ch=$_POST["c"];
switch($ch)
{
  case 1: $s1=substr($s,0,5);
          echo("String=".$s1);
          break;

  case 2:echo("lowercase=".strtolower($s));
         echo("titlecase=".ucwords($s));
         break;
  
  case 3:$new=str_pad($s,strlen($s)+2,'*',STR_PAD_BOTH);
         echo("padding string=".$new);
         break;

  case 4:echo("remove whitespaces=".ltrim($s));
          break;

 case 5:echo("reverse string=".strrev($s));
        break;
}

?>