<html>
<body>
<form method=post action="#">
 enter string::
 <input type="text" name="t1"><br>
 choose seperator::
 <select name="t2">
 <option value="@">@
 <option value="#">#
 <option value="!">!
</select><br><br>
<input type="radio" name="r1" value=1>
split string into seperate words <br>
<input type="radio" name="r1" value=2>
replace all occurances of seperator with:* <br>
<input type="radio" name="r1" value=3>
find last word of given string <br>
<input type="submit">
</form>
</body>
</html>

<?php
 $s=$_POST["t1"];
 $sep=$_POST["t2"];
 $ch=$_POST["r1"];
switch($ch)
{
  case 1:$ans=explode($sep,$s);
         print_r($ans);
         break;

 case 2:$ans=str_replace($sep,"*",$s);
        echo("after changing seperator<br>".$ans);
        break;

 case 3:$ans=explode($sep,$s);
        $res=end($ans);
        echo("last word of string=".$res);
        break;
}
?>