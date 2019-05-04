<?php 
	$con = mysqli_connect('localhost','root','','earned_vote');
	if (@$_POST['tambah']) {
		$id = @$_POST['id'];
		$sqlUpdate = mysqli_query($con,"UPDATE candidates SET earned_vote=earned_vote+1 where id='$id'");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pilpres</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<h1 class="text-center" style="margin: 30px 0px;">Calon Presiden</h1>
		<div class="container col-lg-8 col-md-8 col-xs-8">
			<?php 
				$sqlselect = mysqli_query($con,"SELECT * FROM candidates")or die(mysqli_error($con));
				while ($data= mysqli_fetch_array($sqlselect)) {
			?>
				<div class="col-lg-12 col-md-12 col-xs-12" style="padding: 0; margin : 20px 0px;border-radius: 3px;border:1px black solid;overflow: hidden;">
					<div class="col-lg-6 col-md-6 col-xs-6" style="padding: 0; float: left;">
						<div class="nama card-header col-lg-12 col-md-12 col-xs-12" style="height: 49px;">Nama : <?php echo $data['name']; ?></div>
						<div class="suara card-header col-lg-12 col-md-12 col-xs-12" style="height: 49px;">Perolehan Suara : <?php echo $data['earned_vote']; ?></div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-6" style="float: left;padding: 0; border-radius: 3px;border:1px black solid; height: 98px">
						<form method="POST">
							<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
							<input type="submit" name="tambah" class="btn btn-success" value="TAMBAH" style="margin-left:  50%; margin-top: 25px; transform: translateX(-50%);">
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
	</body>
</html>