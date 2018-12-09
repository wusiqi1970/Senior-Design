<html>
    <head>
        <title>Locker</title>
        <link  href="locker.css" rel="stylesheet" type="text/css" >
        <link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    </head>
    <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>

    <body>
        <header>
            <div class="row">

                <div class="logo">
                    <img src="logo.png">
                </div>

                <ul class="main-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="explore.php">EXPLORE</a> </li>
                </ul>
            </div>

            <div class="epic">
                <h1></h1>

                <div class="button">
                    <a href="" class="btn btn-one">Unlock!</a>
                </div> 
                 <table>
 <tr>
  <th>Tool_ID</th> 
  <th>Tool_Name</th> 
 </tr>
  




<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'epic');
$sql = "select Tool_Num, Tool_Name FROM tools ";
$result = $conn->query($sql);
if($result->num_rows >0)
{
	while ($row = $result->fetch_assoc()){
		 echo "<tr><td>" . $row["Tool_Num"]. "</td><td>" . $row["Tool_Name"] . "</td><td>";

	}
}

$conn->close();



?>

</table>
            </div>
            <div class = "row">
			<div class = "col-md-6">
				<h2>
					Add item here
				</h2>
				<form action = "addition.php" method = "post">
					<div class = "form-group">
					<label>Tool_ID</label>
					<input type = "text" name = "tool_id" class = "form-control" required>


					</div>
					<div class = "form-group">
					<label>Tool_Name</label>
					<input type = "text" name = "tool_name" class = "form-control" required>


					</div>
					<button type = "submit" class = "btn btn-primary"> add </button>
				</form>
			</div>
		</div>


        </header>
        <body>

</body>
</html>

