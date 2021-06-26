<html>
<head>
<title>Odd or Even</title>
</head>
<body>
<form class="" action="phpcycle1_Q1.php" method="get">
<label for="num">Enter a Number</label>
<input type="text" id="num" name="num" required>
<input type="submit" name="" value="Submit">
</form>
</body>
</html>
<?php
if($_GET)
{
$num=$_GET['num'];
if(($num%2)==0)
echo "$num is Even";
else
echo "$num is Odd";
}
?>
