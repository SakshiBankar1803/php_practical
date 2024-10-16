<html>
 <body>
  <form name=f method=get action="#">
   Enter roll no:
   <input type=number name=t1><br>
   enter name::
  <input type=text name=t2><br>
  java<input type=text name=s1><br>
  php<input type=text name=s2><br>
  tcs<input type=text name=s3><br>
  os<input type=text name=s4><br>
  computer<input type=text name=s5><br>
 <input type=submit name=s value=Proceed>
 </form>
 </body>
</html>

<html>
<body>
<?php
$r=explode(",",$_GET["t1"]);
$nm=explode(",",$_GET["t2"]);
$s1=explode(",",$_GET["s1"]);
$s2=explode(",",$_GET["s2"]);
$s3=explode(",",$_GET["s3"]);
$s4=explode(",",$_GET["s4"]);
$s5=explode(",",$_GET["s5"]);
?>
<center>
<table border=1>
<?php
 $c=count($r);
echo("<tr><th> roll no
          <th> name
          <th>sub1 <th>sub2<th>sub3<th>sub4<th>sub5
          <th>total
          <th> per </tr>");
for($i=0;$i<$c;$i++)
{
  $t=$s1[$i]+$s2[$i]+$s3[$i]+$s4[$i]+$s5[$i];
  $p=$t/5;
  echo("<tr><td>".$r[$i]."</td>
            <td>".$nm[$i]."</td>
            <td>".$s1[$i]."</td>
            <td>".$s2[$i]."</td>
            <td>".$s3[$i]."</td>
            <td>".$s4[$i]."</td>
            <td>".$s5[$i]."</td>
            <td>".$t."</td>
            <td>".$p."</td> </tr>");
}
?>
</table>
</center>
</body>
</html>






















