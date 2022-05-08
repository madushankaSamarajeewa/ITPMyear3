<?php

$con = new mysqli('localhost', 'root', '', 'itpm_project');

if($con){
    //echo "Connection Successfull";
}
else{
    die (mysqli_error($con));
}

?>