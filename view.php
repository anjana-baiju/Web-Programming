<?php
$sname="localhost";
$uname="root";
$pswd="";
$dbname="dbmca2014";
//connection
$conn=new mysqli($sname,$uname,$pswd,$dbname);
//check connection
if($conn->connect_error){
  die("Connection failed: ">$conn->connect_error);
}
    $book_no=$_POST['book_no'];
  	$book_name=$_POST['book_name'];
  	$book_edition=$_POST['book_edition'];
  	$book_publisher=$_POST['book_publisher'];
    $sql=mysqli_query($conn,"insert into book_details values($book_no,'$book_name','$book_edition','$book_publisher')");
  	$query=mysqli_query($conn,"select * from book_details");
?>
<html>
<head>
<title>Details of Book</title>
</head>
  <body>
    <table>
    <tr>
      <th>Book No</th>
      <th>Book Name</th>
      <th>Edition</th>
      <th>Publisher</th>
    </tr>
 <?php
      	while($row=mysqli_fetch_assoc($query))
      	{
      		echo "<tr>";
      		echo "<td>".$row['book_no']."</td>";
      		echo "<td>".$row['title']."</td>";
      		echo "<td>".$row['edition']."</td>";
      		echo "<td>".$row['publisher']."</td>";
      		echo "</tr>";
      	}
?>
</table>
</body>
</html>
