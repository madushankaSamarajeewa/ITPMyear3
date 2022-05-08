<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM delever WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $nic = $row["rider"];
                $name = $row["mbn"];
                $mbn = $row["loc"];
                $email = $row["email"];
                $address = $row["item"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleee.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
    <style>
.nav {
  background-color: darkgray;
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 20px;
}
</style>
</head>
<body>
    <div class="nav">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3" style="color:white;">View Record</h1>
                    <div class="form-group">
                        <label style="color:white;">Rider</label>
                        <p style="color:white;"><b><?php echo $row["rider"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Motor Bike</label>
                        <p style="color:white;"><b><?php echo $row["mbn"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Location</label>
                        <p style="color:white;"><b><?php echo $row["loc"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Email</label>
                        <p style="color:white;"><b><?php echo $row["email"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label style="color:white;">Item</label>
                        <p style="color:white;"><b><?php echo $row["item"]; ?></b></p>
                    </div>
                    
                    <p><a href="deltab.php" class="btn btn-primary">Back</a>
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button><p>
                    
                </div>
            </div>        
        </div>
    </div>
    
    </div><br>
  
</body>
</html>