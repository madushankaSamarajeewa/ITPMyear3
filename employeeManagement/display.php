<?php
include 'connect.php';
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

        td {
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="card p-5">
            <h3 class="center">Employee Management</h3>
            <div>
                <button type="button" class="btn btn-success float-right"><a href="index.php" class="text-light"> Back </a></button>
            </div>

            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover my-5">
                    <thead>
                        <tr>
                            <th scope="col">Employee&nbsp;Id</th>
                            <th scope="col">Full&nbsp;Name</th>
                            <th scope="col">Date&nbsp;of&nbsp;Birth</th>
                            <th scope="col">Age</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "Select * from `employee`";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['EmpId'];
                                $name = $row['FullName'];
                                $dob = $row['Dob'];
                                $age = $row['Age'];
                                $address = $row['Caddress'];
                                $phone = $row['Phone_No'];
                                $nic = $row['Nic'];
                                $email = $row['Email'];
                                $role = $row['Erole'];

                                echo ' <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $dob . '</td>
                        <td>' . $age . '</td>                    
                        <td>' . $address . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $nic . '</td>
                        <td>' . $email . '</td>
                        <td>' . $role . '</td>
                        <td> 
                            <button class="btn btn-success"><a href="view.php?viewid=' . $id . '" class="text-light">View</a> </button>
                            <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a> </button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a> </button>
                        </td>
                    </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>