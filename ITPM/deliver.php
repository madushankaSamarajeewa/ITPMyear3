<?php
$rnic=$_POST['rnic'];
$fname=$_POST['fname'];
$addr=$_POST['addr'];
$mbn=$_POST['mbn'];
$pnum=$_POST['pnum'];
$email=$_POST['email'];

//validation

if(!empty($rnic) || !empty($fname) || !empty($addr) || !empty($mbn) || !empty($pnum) || !empty($email) )
{

    //database connection

    $host='localhost';
    $database='itpm_project';
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
        $SELECT= "SELECT Email FROM employee WHERE Email= ? Limit 1";
        $INSERT= "INSERT INTO employee (Rider_NIC,F_Name,Addr,MBN,Phone_No,Email) VALUES(?,?,?,?,?,?)";

        //prepare statement

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
            $stmt->bind_param("isssis", $rnic, $fname, $addr, $mbn, $pnum, $email);
            $stmt->execute();
            echo 'New record inserted successfull';

        }
        else
        {
            echo "someone already registered using this email";
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