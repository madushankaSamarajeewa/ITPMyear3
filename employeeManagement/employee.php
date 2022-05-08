<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sql = "insert into `employee`(`FullName`, `Dob`, `Age`, `Address`, `Phone Number`, `NIC`, `Email` , `ERole`)
    values('$name', '$dob', '$age', '$address', '$phone', '$nic', '$email', '$role')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
        //echo "Data inserted successfully!";
    } else {
        die(mysqli_error($con));
    }
}

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
            <h4 class="center">Add New Employee</h4>
            <div>
                <button class="btn btn-success float-right"><a href="display.php" class="text-light">Back</a> </button>
            </div>
            <form method="post">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter Age" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Current Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Current Address" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>NIC</label>
                    <input type="text" class="form-control" name="nic" placeholder="Enter NIC" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="control-label">Role of Employee</label>

                    <select class="form-control" name="role">
                        <option selected hidden value="">Select Role</option>
                        <option value="Manager">Manager</option>
                        <op tion value="Accountant">Accountant</option>
                            <option value="Cook">Cook</option>
                            <option value="Kitchen Helper">Kitchen Helper</option>
                            <option value="Driver">Driver</option>
                            <option value="Cashier">Cashier</option>

                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-info">Add New Employee</button>
            </form>
        </div>
    </div>
</body>

</html>