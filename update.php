<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $applicant_name = $_POST['ApplicantName'];
    $applicant_id = $_POST['ApplicantId'];
    $applicant_KRA = $_POST['ApplicantKRA'];
    $applicant_PhoneNumber =$_POST['ApplicantPhoneNumber'];
    $applicant_Email =$_POST['ApplicantEmail'];
    $amount =$_POST['Amount'];
    $kins_name =$_POST['KinsName'];
    $kins_PhoneNumber =$_POST['KinsPhoneNumber'];
    $relationship =$_POST['relationship'];
    $id = $_POST['id'];
 
    $sql = "UPDATE details SET 
    ApplicantName = $applicant_name', 
    ApplicantId = '$applicant_id',
    ApplicantKRA = '$applicant_KRA', 
    ApplicantPhoneNumber = '$applicant_PhoneNumber',
    ApplicantEmail = '$applicant_Email',
    Amount = '$amount', 
    KinsName = '$kins_name',
    KinsPhoneNumber='$kins_PhoneNumbe',
    relationship='$relationship',
     WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>
