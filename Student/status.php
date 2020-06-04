<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Status Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link href="styles/styles.css" rel="stylesheet" type="text/css">
	<link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet">
	<!--scripts-->
	<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="scripts/all-plugins.js"></script>
	<script type="text/javascript" src="scripts/plugins-activate.js"></script>
	<link href="./style.css" rel="stylesheet">
</head>

<body>
	<a class="menu-toggle rounded" href="#">
		<i class="fa fa-bars"></i>
	</a>
	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="./index.php">Register</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="./exouting.php">Extended Outing</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="./status.php">Check Your Status</a>
			</li>
		</ul>
	</nav>
	<div class="anonymous">
		<div class="row">
			<div class="col-lg-2"></div>

			<div class="col-lg">

				<form class="form" method="POST">
					<div class="col-12 col-md-12  head" style="font-family: sans-serif; color: #ffffff;">
						<h1> Request Status</h1>
					</div>

					<div class="form-group row">


						<label class="col-sm-2 col-form-label" style="font-family: sans-serif; color: #ffffff;">Request
							No.
						</label>
						<div class="col-sm">
							<input type="text" class="form-control reg" id="regno" name="regno" required>
						</div>
					</div>


					<br>
					<div class="form-group row ">
						<div class="col-sm-6 offset-sm-6 ">
							<button type="submit" id="submit" name="submit" class="btn btn-primary sub" style="font-family: sans-serif; color: #ffffff; ">Submit</button>
						</div>
					</div>

				</form>
				<?php
				include 'phpqrcode/qrlib.php';
				$conn = mysqli_connect("localhost", "root", "software", "soft");
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				if (isset($_POST['submit'])) {
					$ack = $_POST['regno'];
					$sql = "SELECT regno, position FROM outing WHERE acknum='$ack'";
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
						$disp = $row['position'];
						if (isset($_POST['submit'])) {
							echo "<center><p>Your outing is $disp. The reference number is: $ack</p></center><br>";

							$text = $row['regno'];
							$path = '';
							$file = $path . uniqid() . ".png";
							$ecc = 'L';
							$pixel_Size = 10;
							$frame_Size = 10;
							QRcode::png($text, $file, $ecc, $pixel_Size, $frame_size);
							echo "<center><img src='" . $file . "'></center>";
						}
					}
				};



				?>

				<script>
					async function addinfo(e) {
						e.preventDefault();
						document.body.innerHTML = await (await fetch('?add=1')).text();
					}
				</script>
			</div>

			<div class="col-lg-2"></div>
		</div>
	</div>
	</div>
	</div>








	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>