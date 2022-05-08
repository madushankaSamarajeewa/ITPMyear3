<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nic = $name = $address = $mbn = $phn = $email = "";
$nic_err = $name_err = $address_err = $mbn_err = $phn_err = $email_err = "";
 
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
// Validate nic
    $input_nic = trim($_POST["nic"]);
    if(empty($input_nic)){
        $nic_err = "Please enter an nic.";     
    } else{
        $nic = $input_nic;
    }

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate mbn
    $input_mbn = trim($_POST["mbn"]);
    if(empty($input_mbn)){
        $mbn_err = "Please enter the mbn amount.";     
    } elseif(!ctype_digit($input_mbn)){
        $mbn_err = "Please enter a positive integer value.";
    } else{
        $mbn = $input_mbn;
    }

     // Validate phone
     $input_phn = trim($_POST["phn"]);
     if(empty($input_phn)){
         $phn_err = "Please enter the phn amount.";     
     } elseif(!ctype_digit($input_phn)){
         $phn_err = "Please enter a positive integer value.";
     } else{
         $phn = $input_phn;
     }

     // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";     
    } else{
        $email = $input_email;
    }
    
    // Check input errors before inserting in database
    if(empty($nic_err) && empty($name_err) && empty($address_err) && empty($mbn_err) && empty($phn_err) && empty($email_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET nic=?, name=?, address=?, mbn=?, phn=?, email=?  WHERE id=?";
        // $sql = "INSERT INTO employees (nic, name, address, mbn, phn, email) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $param_nic, $param_name, $param_address, $param_mbn, $param_phn, $param_email, $param_id);
            
            // Set parameters
            $param_nic = $nic;
            $param_name = $name;
            $param_address = $address;
            $param_mbn = $mbn;
            $param_phn = $phn;
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $nic = $row["nic"];
                    $name = $row["name"];
                    $address = $row["address"];
                    $mbn = $row["mbn"];
                    $phn = $row["phn"];
                    $email = $row["email"];
                    // $name = $row["name"];
                    // $address = $row["address"];
                    // $salary = $row["salary"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>NIC</label>
                            <textarea name="nic" class="form-control <?php echo (!empty($nic_err)) ? 'is-invalid' : ''; ?>"><?php echo $nic; ?></textarea>
                            <span class="invalid-feedback"><?php echo $nic_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>mbn</label>
                            <input type="text" name="mbn" class="form-control <?php echo (!empty($mbn_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mbn; ?>">
                            <span class="invalid-feedback"><?php echo $mbn_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>phn</label>
                            <input type="text" name="phn" class="form-control <?php echo (!empty($phn_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phn; ?>">
                            <span class="invalid-feedback"><?php echo $phn_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
