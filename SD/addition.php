<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'epic');
$name = $_POST['tool_id'];
$pass = $_POST['tool_name'];

$s = "select * from tools where Tool_Num = '$name' ";

$result = mysqli_query ($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "item already in database";
}

else
{
	$reg = "insert into tools(Tool_Num,Tool_Name) values ('$name','$pass')";
	mysqli_query($con, $reg);
	//echo "Successfully added items";
	header('location:loker.php');

}




?>