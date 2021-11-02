<?php
require_once('db_connect.php');

if(isset($_POST['btn-apply']))
{
    $applicant_name = mysqli_real_escape_string($con,$_POST['ApplicantName']);
    $applicant_id = mysqli_real_escape_string($con,$_POST['ApplicantId']);
    $applicant_KRA = mysqli_real_escape_string($con,$_POST['ApplicantKRA']);
    $applicant_PhoneNumber =mysqli_real_escape_string($con, $_POST['ApplicantPhoneNumber']);
    $applicant_Email =mysqli_real_escape_string($con, $_POST['ApplicantEmail']);
    $amount =mysqli_real_escape_string($con, $_POST['Amount']);
    $kins_name =mysqli_real_escape_string($con, $_POST['KinsName']);
    $kins_PhoneNumber =mysqli_real_escape_string($con, $_POST['KinsPhoneNumber']);
    $relationship =mysqli_real_escape_string($con, $_POST['relationship']);
}

if(empty($applicant_name) ||empty( $applicant_id) ||empty($applicant_KRA)
||empty($applicant_PhoneNumber)||empty($applicant_Email)||empty($amount)
||empty($kins_name)||empty($kins_PhoneNumber)||empty( $relationship))
{
    echo '<script type="text/javascript"> alert("Please fill in the blanks")</script>';
}
else
{
    $sql= "insert into details(ApplicantName,ApplicantId,ApplicantKRA,
    ApplicantPhoneNumber,ApplicantEmail,Amount,KinsName,KinsPhoneNumber
    ,relationship)values('$applicant_name','$applicant_id','$applicant_KRA',
    '$applicant_PhoneNumber',' $applicant_Email','$amount','$kins_name',
    ' $kins_PhoneNumber','$relationship') ";
    $result=mysqli_query($con, $sql);
    if($result)
    {
        echo '<script type="text/javascript"> alert("Loan Application Successfully")</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Check your connection")</script>';;
    }
}

?>
