<?php
$connection= mysqli_connect("localhost","root","","rally") or die("Connection Error");
	$query ="SELECT * FROM carreras";
	$execute = $connection->query($query);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Website Font style -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post" action="submit.php">
						
						<div class="form-group">
							<label for="cedula" class="cols-sm-2 control-label">Your ID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="cedula" id="cedula"  placeholder="Enter Identifiquer number"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>
							<div class="form-group">
							<label for="lastName" class="cols-sm-2 control-label">Your Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lastName" id="lastName"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>


						<!--carreras-->
						
						<select name="codigo" id="">
							<option selected = "selected" >Choose one</option>
							<?php
							while ($row = mysqli_fetch_array($execute)) {
							?>
							<option value= <?php echo $row["codigo"] ?> ><?php echo $row["nombre"] ?> </option>	
								
						<?php	
							}
						?>		
						</select>
						
						<div class="form-group ">
							<input type="submit" class="btn btn-default" value="submit"></input>
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

