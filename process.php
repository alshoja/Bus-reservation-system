<!DOCTYPE html>
<html>

<head>
	<title>Ticketing System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<form action="" class="register">
		<h1>Reservation Details</h1>
		<?php if (isset($_POST) == true && empty($_POST) == false) :
			$chkbox = $_POST['chk'];
			$bus = $_POST['bus'];
			$day = $_POST['day'];
			$month = $_POST['month'];
			$mob = $_POST['mob'];
			$type = $_POST['type'];
			$from = $_POST['from'];
			$to = $_POST['to'];
			$root = $_POST['root'];
			$BX_NAME = $_POST['BX_NAME'];
			$BX_age = $_POST['BX_age'];
			$BX_gender = $_POST['BX_gender'];
			$BX_birth = $_POST['BX_birth'];
		?>
			<fieldset class="row1">
				<legend>Travel Information</legend>
				<p>
					<label>BUS Name :
					</label>
					<input disabled name="bus" type="text" readonly="readonly" value="<?php echo $bus ?>" />
					<label> Date :
					</label>
					<input disabled type="text" readonly="readonly" class="small" value="<?php echo $day ?>" />
					<input disabled type="text" readonly="readonly" class="small" value="<?php echo $month ?>" />
					<input disabled type="text" readonly="readonly" class="small" value="2020" />
					<label>Bus Type :
					</label>
					<input disabled type="text" readonly="readonly" value="<?php echo $type ?>" />

				</p>
				<p>
					<label>From :
					</label>
					<input disabled name="from" type="text" readonly="readonly" value="<?php echo $from ?>" />
					<label>To :
					</label>
					<input disabled name="to" type="text" readonly="readonly" value="<?php echo $to ?>" />
					<label>Via (Root) :
					</label>
					<input disabled type="text" readonly="readonly" value="<?php echo $root ?>" />

				</p>
				<p>
					<label>Mobile :
					</label>
					<input disabled name="mob" type="text" readonly="readonly" value="<?php echo $mob ?>" />
				</p>

				<div class="clear"></div>
			</fieldset>
			<fieldset class="row2">
				<legend>Passenger Details
				</legend>
				<table id="dataTable" class="form" border="1">
					<tbody>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Bearth Pre</th>
						</tr>
						<?php foreach ($BX_NAME as $row => $b) { ?>
							<tr>
								<td>
									<?php echo $row + 1; ?>
								</td>
								<td>
									<?php echo $BX_NAME[$row]; ?>
								</td>
								<td>

									<?php echo $BX_age[$row]; ?>
								</td>
								<td>
									<?php echo $BX_gender[$row]; ?>
								</td>
								<td>
									<?php echo $BX_birth[$row]; ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="clear"></div>
			</fieldset>
			<fieldset class="row5">
				<legend>Terms and Conditions</legend>
				<p>
					<input class="submit" type="button" value="Make Payment &raquo;" />
					<a class="submit" href="index.html" type="button"> Back <a />
				</p>
				<div class="clear"></div>
			</fieldset>
		<?php else : ?>
			<fieldset class="row1">
				<legend>Sorry</legend>
				<p>OOps! something went wrong please try again.</p>
			</fieldset>
		<?php endif; ?>
		<div class="clear"></div>
	</form>

	<div class="footer">
		<p>© 2020 Passenger Tim, all rights reserved</p>
	</div>
</body>

</html>