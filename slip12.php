<?php
include "arithmatic.html";
$n1=$_POST["t1"];
$n2=$_POST["t2"];
$ch=$_POST["r"];
if($ch==1)
{
  $sum=$n1+$n2;
  echo $sum;
}
else if($ch==2)
{
  $sub=$n1-$n2;
  echo $sub;
}
else if($ch==3)
{
  $mul=$n1*$n2;
  echo $mul;
}
else if($ch==4)
{
  $div=$n1/$n2;
  echo $div;
}

?>