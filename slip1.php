<html>
<head>
<style background-color:yellow>
 h1
{
 font-size:40px;
 color:red;
 text-align:center;
}
body
{
 background-color:yellow;
}
fieldset
{
 background-color:cyan;
 height:50px;
 width:50px;
}
.submit
{
 background-color:green;
}
.clear
{
 background-color:blue;
}
</style>
</head>
<body>
<form>
<fieldset>
<h1> PROJECT MANAGEMENT</h1><br><br>
project name:: <input type="text"><br>
assigned to:: 
   <select>
   <option value="abc">abc</option>
   <option value="pqr">pqr</option>
  </select>  <br>
start date::<input type="date"><br><br>
end date:: <input type="date"><br><br>
description::<input type="TextArea"><br><br>
priority::
 <input type="radio" value="high">high
<input type="radio" value="average">average
<input type="radio" value="low">low
<br><br>
<input type="submit" value="submit">
<input class="clear" type="button" value="clear">
</form>
</body>
</html>

