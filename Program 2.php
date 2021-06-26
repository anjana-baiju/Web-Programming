< html>
<head>
<title>Factorial of a Number</title>
</head>
<body>
<form class="" action="phpcycle1_2.php" method="post">
<label for="num">Enter a Number</label>
<input type="text" id="num" name="num" required>
<input type="submit" name="" value="Submit">
</form>
</body>
</html>
<?php
if($_POST)
{
$fact=1;
$num=$_POST['num'];
for($x=$num;$x>=1;$x--)
$fact=$fact*$x;
echo "Factorail of $num= $fact";
}

?>
