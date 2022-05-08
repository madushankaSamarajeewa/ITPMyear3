
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/function.php'); ?>
<?php 

	
	$errors = array();
	$order_id = '';
	$cusName = '';
		$conNo = '';
	$dilAddr = '';
	$dDate = '';

	$foodOrder = '';
	$flavor = '';
	$type = '';
	$quantity = '';
	$price = '';

	if (isset($_GET['order_id'])) {
		// Getting user info...
		$order_id = mysqli_real_escape_string($connection, $_GET['order_id']);
		$query = "SELECT * FROM order WHERE id = {$order_id} LIMIT 1";

		$result_set = mysqli_query($connection, $query);

		if ($result_set) {
			if (mysqli_num_rows($result_set) == 1) {
				// Finance Found...
				$result = mysqli_fetch_assoc($result_set);

				
				$cusName = $result['cusName'];
				$conNo = $result['conNo'];
				$dilAddr = $result['dilAddr'];
				$dDate = $result['dDate'];
				$foodOrder = $result['foodOrder'];
				$flavor = $result['flavor'];
				$type = $result['type'];
				$quantity = $result['quantity'];
				$price = $result['price'];

			} else {
				//Finance Not Found
				header('Location: finance.php?user_not_found');
			}
			
		} else {
			// que umsuccessful
			header('Location: finance.php?err=query_failed');
		}


	}


	if (isset($_POST['submit'])) {

		$order_id =$_POST['order_id'];
	
		
		

		// checking requierd fields
		$req_fields = array('order_id');

		//looking function.php - check_req_fields function
		$errors = array_merge($errors, check_req_fields($req_fields)) ;

		

		if (empty($errors)) {
			// No error found - execute
			// 1. Record num alredy sanitized
			$cusName = mysqli_real_escape_string($connection, $_POST['cusName']);
			

			$query = "UPDATE order SET ";			
			$query .= "cusName = '{$cusName}'";
			$query .= "WHERE id = {$order_id} LIMIT 1";


			$result = mysqli_query($connection, $query);

			if ($result) {
				// Que Succsess... Redirect to the finance page
				header('Location: finance.php?user_modified= true');
			} else {
				$errors[] = 'Failed to change password...';
			}

		}

	}

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password - Finance</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
		<div class="appname">Finance Managemnet System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['EmpId']; ?>! <a href="logout.php">Log Out</a></div>
	</header>
	<main>
		<h1>Change Password<span><a href="finance.php">back to Finance List</a></span></h1>

		<?php 
			if (!empty($errors)) {
				echo '<div class="errmsg">';
				echo '<b>There were error(s) in form.</b><br>';
				foreach ($errors as $error) {
					echo $error . '<br>';
				}
				echo '</div>';
				// code...
			}
		?>
		
			<form action="change-password.php" method="post" class="financeform">
				<input type="hidden" name="finance_id" value="<?php echo $finance_id?>">
				<p>
					<label for="">Record Number:</label>
					<input type="text" name="recNo" maxlength="10" <?php echo 'value = "' . $recNo. '"'; ?> disabled>
				</p>
				oop
				<p>
					<label for="">Record Type:</label>
					<input type="text" name="recType" maxlength="16" <?php echo 'value = "' .$recType . '"'; ?> disabled>
				</p>

				<p>
					<label for="">Ammount:</label>
					<input type="text" name="ammount" placeholder="10000.00" maxlength="16" <?php echo 'value = "' . $ammount. '"'; ?> disabled>
				</p>

				<p>
					<label for="">Authorized Emplooyee ID:</label>
					<input type="text" name="EmpId" maxlength="10" <?php echo 'value = "' . $EmpId. '"'; ?> disabled>
				</p>

				<p>
					<label for="">Date of Record:</label>
					<input type="Date" name="dateofrecord"  <?php echo 'value = "' . $dateofrecord. '"'; ?> disabled>
				</p>

				<p>
					<label for="">New Password:</label>
					<input type="password" name="password" id="">
					
				</p>

				<p>
					<label for="">Show Password:</label>
					<input type="checkbox" name="showpassword" id="showpassword" style="width: 20px; height: 20px">
					
				</p>

				<p>
					<label for="">&nbsp;</label>
					<button type="submit" name="submit">Update Password</button>
				</p>

				





			</form>
		

	</main>
	<script src ="js/jquery.js"></script>
	<script >
		$(document).ready(function(){
			$('#showpassword').click(function(){
				if ($('#showpassword').is(':checked')) {
					$('#password').attr('type','text');
				} else {
					$('#password').attr('type', 'password');

				}
			});
		});
	</script>


</body>
</html>