<?php
include 'connect.php';

$id = $_GET['viewid'];

$sql = "Select * from `employee` where EmpId=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$name = $row['FullName'];
$dob = $row['Dob'];
$age = $row['Age'];
$address = $row['Caddress'];
$phone = $row['Phone_No'];
$nic = $row['Nic'];
$email = $row['Email'];
$role = $row['Erole'];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Employee Management</title>

    <style>
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container my-2">
        <div class="card p-5">
            <h3 class="center">Employee Management System</h3>
            <h4 class="center">View Employee</h4>
            <div>
                <button class="btn btn-success float-right"><a href="display.php" class="text-light">Back</a> </button>
            </div>

            <form>
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter Full Name" autocomplete="off" readonly value=<?php echo "'$id'" ?>>
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name" autocomplete="off" readonly value=<?php echo "'$name'" ?>>
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" autocomplete="off" readonly value=<?php echo "'$dob'" ?>>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter Age" autocomplete="off" readonly value=<?php echo "'$age'" ?>>
                </div>
                <div class="form-group">
                    <label>Current Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Current Address" readonly autocomplete="off" value=<?php echo "'$address'" ?>>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" readonly autocomplete="off" value=<?php echo "'$phone'" ?>>
                </div>
                <div class="form-group">
                    <label>NIC</label>
                    <input type="text" class="form-control" name="nic" placeholder="Enter NIC" autocomplete="off" readonly value=<?php echo "'$nic'" ?>>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off" readonly value=<?php echo "'$email'" ?>>
                </div>
                <div class="form-group">
                    <label class="control-label">Role of Employee</label>

                    <select class="form-control" name="role" readonly>
                        <option selected hidden value="">Select Role</option>
                        <option value="Manager" <?php if ($role == 'Manager') echo ' selected="selected"'; ?>>Manager</option>
                        <option value="Accountant" <?php if ($role == 'Accountant') echo ' selected="selected"'; ?>>Accountant</option>
                        <option value="Cook" <?php if ($role == 'Cook') echo ' selected="selected"'; ?>>Cook</option>
                        <option value="Kitchen Helper" <?php if ($role == 'Kitchen Helper') echo ' selected="selected"'; ?>>Kitchen Helper</option>
                        <option value="Driver" <?php if ($role == 'Driver') echo ' selected="selected"'; ?>>Driver</option>
                        <option value="Cashier" <?php if ($role == 'Cashier') echo ' selected="selected"'; ?>>Cashier</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</body>

</html>