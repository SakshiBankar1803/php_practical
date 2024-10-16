<?php
  $arr=array(30,32,36,27,22,20,40,35,33,19,29,37,41,26,34);
  
  $c=count($arr);
  $s=array_sum($arr);
  $a=$s/$c;
  print_r($arr);
  echo("Average Temp=$a <br>");
  arsort($arr);
  echo("Five warmest temp:");
  for($i=0;$i<5;$i++)
     echo("<br>$arr[$i]");
  
?>
