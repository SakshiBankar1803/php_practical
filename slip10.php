<html>
<body>
<form method="post" action="#">
 enter first num::
  <input type="text" name="t1"><br>
 enter second number::
  <input type="text" name="t2"><br>
  1)find mod<br>
  2)power<br>
  3)find sum<br>
  4)find fact<br>
 enter choice::<br>
<input type="number" name="choice">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$n1=$_POST["t1"];
$n2=$_POST["t2"];
$ch=$_POST["choice"];
switch($ch)
{
  case 1:mod($n1,$n2);
         break;
 case 2:power($n1,$n2);
        break;
 case 3:sum($n1);
        break;
 case 4:fact($n2);
        break;
}
function mod($n1,$n2)
{
  $ans=$n1%$n2;
  echo("mod of given number=".$ans);
}
function power($n1,$n2)
{
   $ans=1;
    for($i=1;$i<=$n2;$i++)
    {
	$ans=$ans*$n2;
    }
    echo("<br>Power of first number raised to the second::".$ans);
}
function sum($n1)
{
  $sum=0;
 for($i=0;$i<=$n1;$i++)
{
  $sum=$sum+$i;
}
echo("sum of number=".$sum);
}
function fact($n2)
{
  $fact=1;
  for($i=1;$i<=$n2;$i++)
  {
    $fact=$fact*$i;
  }
 echo("factorial of number=".$fact);
}
?>