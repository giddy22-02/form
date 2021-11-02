<?php 

$con= mysqli_connect('localhost','root','', 'loan_site');

if(!$con)
{
    echo 'please check your database connection';
}
else
{
    echo '<script type="text/javascript"> alert("Connection Successfully")</script>';
}
?>