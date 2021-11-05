<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
<form action="" method="POST">
<table align='center' border='2'>
<th><h1 style='color:red;'>Arithmetic operations in PHP</h1></th>
<tr>
	<td>Enter the value of A:<input type="number" name="num1"></td>
</tr>

<tr>
<td>Enter the opertion which want to be perform<input type="text" name="op"></td><br><br>
</tr>

<tr>
<td>Enter the value of B:<input type="number" name="num2"></td><br><br>
</tr>
<tr>
<td><input style="margin-left: 50%;" type="submit"></td>
</tr>
</tr>
</table>
</form>
<?php
	echo "<td>The Result of arithmetic operation is : <?php echo $num;?></td>";
$num1 =$_POST["num1"];
$num2 =$_POST["num2"];
$op=$_POST["op"];
if($op=="+")
{
	$num=$num1+$num2;
	echo $num;
}
elseif($op=="-")
{
	$num=$num1-$num2;
	echo $num;
}
elseif($op=="*")
{
	$num=$num1*$num2;
	echo $num;
}
elseif($op=="/")
{
	$num=$num1/$num2;
	echo $num;
}
elseif($op=="%")
{
	$num=$num1%$num2;
	echo $num;
}
else
{
	"Invalid Operator";
}


?>
</body>
</html>
