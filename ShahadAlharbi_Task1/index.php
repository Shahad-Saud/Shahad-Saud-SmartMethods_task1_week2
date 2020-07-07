<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Smart method control panel</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v2">
	<div class="page-content">
		<div class="form-v2-content">
			<div class="form-left">
				<img src="images/form-v2.jpg" alt="form" width="400" height="600">
	
				<div class="text-1">
					<p>Direction  Of SM Robort <span> </span></p>
					<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sm_control";


 $conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, sm_foroward, sm_backward, sm_right, sm_left, sm_stop FROM sm_manualcontrol";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		

	
		if(isset($_POST['Right'])) { 
		
			echo  "<br>   This is :  ". $row["sm_right"]  ;
			
		} 
		if(isset($_POST['Left'])) { 
			echo "<br>   This is :  ". $row["sm_left"] ;
		}
		if(isset($_POST['Reset'])) { 
				echo "  ";
		}
		
		if(isset($_POST['Forward'])) { 
			echo  "<br> This is : ". $row["sm_foroward"] ;
		}
		
		if(isset($_POST['Backward'])) { 
				echo "<br>  This is : " . $row["sm_backward"] ;
		}
	
		
    }
	
	
} else {
    echo "0 results";
}

 
$conn->close();
?>
				</div>
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
			<br><br><br><br><br><br><br>
				<h2>Control Panel</h2>
				<div class="form-row">
					<input type="submit" name="Right"
				value="Right"  /> 
				
					
				</div>
				<div class="form-row">
					
					<input type="submit" name="Left"
				value="Left"/> 

				</div>
				<div class="form-row">
				
				<input type="submit" name="Reset"
				value="Reset"/> 
				
				</div>
				<div class="form-row">
					
				<input type="submit" name="Forward"
				value="Forward"/> 
				
				</div>
				<div class="form-row">
			
				<input type="submit" name="Backward"
				value="Backward"/> 
				
				</div>
			
				
			</form>
		</div>
	</div>
</body>
</html>