<?php

$rider=$_POST['rider'];
$mbn=$_POST['mbn'];
$loc=$_POST['loc'];
$email=$_POST['email'];
$item=$_POST['item'];


//validation

if(!empty($rider) || !empty($mbn) || !empty($loc) || !empty($email) || !empty($item))
{

    //database connection

    $host='localhost';
    $database='demo';
    $username='root';
    $pass='';

    //create connection

    $conn=new mysqli($host,$username,$pass,$database);
    
    if(mysqli_connect_error())
    {
        die('Connect Error ('.mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    {
        $SELECT= "SELECT email FROM delever WHERE email= ? Limit 1";
        $INSERT= "INSERT INTO delever (rider,mbn,loc,email,item) VALUES(?,?,?,?,?)";

       

        $stmt= $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
            
        if($rnum==0)
        {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssss", $rider, $mbn, $loc, $email, $item);
            $stmt->execute();
            echo 'Deliver Records Add successfully';
            header("location: deltab.php");

        }
        else
        {
            echo "someone already went using this email";
        }
        $stmt->close();
        $conn->close();

    }


}

else
{
    echo "all fields are required";
}



?>