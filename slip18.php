<html>
<body>
<form method="post" action="#">
 1.array flip <br>
 2.shuffle <br>
 3.conver array element into individual variable <br>
 4.disply element along with key <br>
enter choice: <input type="number" name="c">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$a=array("sagar"=>"31","vickey"=>"41","leena"=>"39","ramesh"=>"40");
$ch=$_POST["c"];
switch($ch)
{
 case 1:$ans=array_flip($a);
        print_r($a);
        break;

 case 2:shuffle($a);
        print_r($a);
        break;

 case 3:extract($a);
        echo "$sagar";
        echo "$vickey";
        echo "$leena";
        echo "$ramesh";
        break;


 case 4:foreach($a as $key=>$value)
        {
           echo("$key:$value <br>");         

        }
        break;
}

?>