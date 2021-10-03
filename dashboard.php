<?php

//home.php

session_start();

if(!isset($_SESSION["user_id"]))
{
	header("location:https://autopors.tech/login.php");
}

include('database_connection.php');

include('function.php');

$user_name = '';
$user_id = '';

if(isset($_SESSION["user_name"], $_SESSION["user_name"]))
{
	$user_name = $_SESSION["user_name"];
	$user_id = $_SESSION["user_id"];
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>AutoPors| Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/jquery.js"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=url], select, textarea {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=color], select {
  width: 30px;
  height:30px;
  color: blue;
  background-color: white;
  padding: 4px;
  border: 0;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=textarea], select, text {
  width: 100%;
 border: 1px solid #888; 
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>	
	</head>
	<body>
		<br />
		<div class="container">
			<h3 align="center">Dashboard</h3>
			<br />
			<br />
			<div class="row">
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Fill your details</h3>
						</div>
						<div class="panel-body">
							<h1 align="center">Welcome <?php echo $user_name; ?></h1>
							<br>
							<h4 align ="left">Fill require details below for your portfolio sites.</h4>
<br>
						  <form action="createport.php" method="post">

    <label for="fname">Your first name</label>
    <input type="text" id="fname" name="fname" required placeholder="Your first name..">

    <label for="lname">Your last name</label>
    <input type="text" id="lname" name="lname" required placeholder="Your last name..">

    <label for="email">Your Email Address</label>
    <input type="email" id="email" name="email" required placeholder="Email Address where user will contact you">

    <label for="plink">Your profile photo</label>
    <input type="url" id="plink" name="plink" required placeholder="Your profile photo link"> 

    <label for="address">Address</label>
    <textarea id="address" name="address" required placeholder="Your address"></textarea>

    <label for="aboutyou">About you</label>
    <textarea id="aboutyou" name="aboutyou" required placeholder="Describe yourself in few lines"></textarea>

    <h5>Your skills.</h5>
    <label for="skill1">Skill 1</label>
    <input type="text" id="skill1" name="skill1" required placeholder="Your any logical skill 1">

    <br>
    <label for="rskill1">Give rating out of 10 for Skill 1</label>
    <input type="number" id="rskill1" name="rskill1" required value="1" min ="1" max ="10">
    <br>

    <label for="nskill1">Number of Project based on your Skill 1</label>
    <input type="number" id="nskill1" name="nskill1" required value="0" min="0">    
<br>
<br>
    <label for="skill2">Skill 2</label>
    <input type="text" id="skill2" name="skill2"  placeholder="Your any logical skill 2">

    <br>
    <label for="rskill2">Give rating out of 10 for Skill 2</label>
    <input type="number" id="rskill2" name="rskill2" value="1" min ="1" max ="10">
    <br>

    <label for="nskill2">Number of Project based on your Skill 2</label>
    <input type="number" id="nskill2" name="nskill2" value="0" min="0">    
<br>
<br>
    <label for="skill3">Skill 3</label>
    <input type="text" id="skill3" name="skill3"  placeholder="Your any logical skill 3">

    <br>
    <label for="rskill3">Give rating out of 10 for Skill 3</label>
    <input type="number" id="rskill3" name="rskill3"  value="1" min ="1" max ="10">
    <br>

    <label for="nskill3">Number of Project based on your Skill 3</label>
    <input type="number" id="nskill3" name="nskill3" value="0" min="0">    
<br>
<br>
    <label for="skill4">Skill 4</label>
    <input type="text" id="skill4" name="skill4"  placeholder="Your any logical skill 4">

    <br>
    <label for="rskill4">Give rating out of 10 for Skill 4</label>
    <input type="number" id="rskill4" name="rskill4" value="1" min ="1" max ="10">
    <br>

    <label for="nskill4">Number of Project based on your Skill 4</label>
    <input type="number" id="nskill4" name="nskill4"  value="0" min="0">    
<br>
<br>
    <label for="skill5">Skill 5</label>
    <input type="text" id="skill5" name="skill5"  placeholder="Your any logical skill 5">

    <br>
    <label for="rskill5">Give rating out of 10 for Skill 5</label>
    <input type="number" id="rskill5" name="rskill5"  value="1" min ="1" max ="10">
    <br>

    <label for="nskill5">Number of Project based on your Skill 5</label>
    <input type="number" id="nskill5" name="nskill5"  value="0" min="0">    
<br>
<br> 

    <h3>Your portfolio site settings</h3>
    <label for="tcolor">Theme Color</label>
    <input type="text" id="tcolor" name="tcolor" required placeholder="Any one theme color for websites for button, label etc." value="red">

    <label for="tcolor2">Theme Color 2</label>
    <input type="text" id="tcolor2" name="tcolor2" required placeholder="Any one theme color for websites for button, label etc." value="blue">

    <h5>Some additional Notes</h5> (Note: This will not include in you website, it's for admin.)
    <textarea id="extra" name="extra" placeholder="Additional here"> </textarea>   

    <input type="submit" value="Submit">
    </form>	
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">User Details</h3>
						</div>
						<div class="panel-body">
							<div align="center">
								<?php
								Get_user_avatar($user_id, $connect);
								echo '<br /><br />';
								echo $user_name;
								?>
								<br />
								<br />
								<a href="logout.php" class="btn btn-default">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<br />
	</body>
</html>