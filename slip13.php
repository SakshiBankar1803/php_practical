<html>
<body>
 <table border="1px">
 <?php
 echo("chess board");
 $val=0;
 for($col=0;$col<8;$col++)
 {
   echo("<tr>");
   $val=$col;
 for($row=0;$row<8;$row++)
 {
   if($val%2==0)
   {
     echo("<td height=20px width=20px bgcolor=black></td>");
    $val++;
   }
   else
  {
    echo("<td height=20px width=20px bgcolor=white></td>");
     $val++;
  }
 }
 echo("</tr>");
 }

 ?>
</table>
</body>
</html>