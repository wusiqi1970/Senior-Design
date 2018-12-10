

<html>
    <head>
        <title>Locker</title>
        <link  href="locker.css" rel="stylesheet" type="text/css" >
        <link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    </head>

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
        
        <div class = "row2">
            <div class = "text">
                Add item here!
            </div>
			<div class = "col-md-6">
				<form action = "addition.php" method = "post">
					<div class = "form-group">
					    <label>Tool_ID</label>
					    <input type = "text" name = "tool_id" class = "form-control" required>
                    </div>
                    
                    <div class = "form-group">
					    <label>Tool_Name</label>
					    <input type = "text" name = "tool_name" class = "form-control" required>
					</div>
                    <div class = "form-group">
					    <label>Locker_ID</label>
					    <input type = "text" name = "locker_id" class = "form-control" required>
					</div>
                    <button type = "submit" class = "btn btn-primary"> add </button>
				</form>
			</div>
        </div>
        <div class = "row3">
            <div class = "text">
                Rent item here!
            </div>
            <div class = "col-md-6">
                <form action = "rent.php" method = "post">
                   
                    <div class = "form-group">
                        <label>Tool_Name</label>
                        <input type = "text" name = "tool_name" class = "form-control" required>
                    </div>
                            <button type = "submit" class = "btn btn-primary"> Rent </button>
                </form>
            </div>
        </div>
        <div class = "row4">
            <div class = "text">
                Return item here!
            </div>
            <div class = "col-md-6">
                <form action = "return.php" method = "post">
                   
                    <div class = "form-group">
                        <label>Tool_Name</label>
                        <input type = "text" name = "tool_name" class = "form-control" required>
                    </div>
                            <button type = "submit" class = "btn btn-primary"> Return </button>
                </form>
            </div>
        </div>


        <table>
            <tr>
            <th>Tool_ID</th> 
            <th>Tool_Name</th> 
            <th>Locker_ID</th>
            <th>Status</th>
            </tr>
            <?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'epic');
$sql = "select Tool_Num, Tool_Name,Locker_Num,Status FROM tools ";
$result = $conn->query($sql);
if($result->num_rows >0)
{
	while ($row = $result->fetch_assoc()){
		 echo "<tr><td>" . $row["Tool_Num"]. "</td><td>" . $row["Tool_Name"] . "</td><td>" .$row["Locker_Num"]."</td><td>".$row["Status"]."</td></tr>";

	}
}

$conn->close();
?>

        </table>
        <style>
            table {
                float: right;
                border-collapse: collapse;
                width: 50%;
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
    </header>
</html>

