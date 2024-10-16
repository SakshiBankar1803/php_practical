<html>
<body>
<form method="post" action="#">
1.Split an array into chunks<br>
2.Sort the array by values without changing the keys<br>
3.Filter even elements from an array<br>
enter choice:: 
<input type="number" name="t"><br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$a=$a=array("a"=>1,"b"=>6,"c"=>7,"d"=>4,"e"=>5,"f"=>3);
$ch=$_POST["t"];
switch($ch)
{
 case 1:$ans=array_chunk($a,2);
           print_r($ans) ;
           break;

 case 2:arsort($a);
        print_r($a);
        break;

 case 3:print_r(array_filter($a,'is_even'));
        break;
}
function is_even($var)
{
  if($var%2==0)
   return $var;
}

?>