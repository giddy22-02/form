<?php 
 
require_once 'db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM members";
    $result=mysqli_query($con, $sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Member</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        <h3>Gideon's Loan Ltd.</h3>
   </div>
<section class="application">
        <h5 class="title">Apply Loan Here</h5>
        <p>Get within 24 hours</p>
        <form action="update.php" method="post">
        <div class="container">
            <div class="contact-form">
                <div class="applicant-details">
                    <h3>Applicant Details</h3>
                    <div class="row">
                    <div class="form-field  col-lg-6">
                        <input id="name" class="input-text" type="text" name="ApplicantName">
                        <label for="name"class="label" >name</label>
                    </div>
                    <div class="form-field  col-lg-6">
                        <input id="id" class="input-text" type="number" name="ApplicantId">
                        <label for="id"class="label" >ID No</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-field  col-lg-6">
                        <input id="kra" class="input-text" type="text" name="ApplicantKRA">
                        <label for="kra"class="label" >KRA No</label>
                    </div>
                    
                    <div class="form-field  col-lg-6">
                        <input id="phone" class="input-text" type="tel" name="ApplicantPhoneNumber">
                        <label for="phone"class="label" >phone No</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-field  col-lg-6">
                        <input id="email" class="input-text" type="email" name="ApplicantEmail">
                        <label for="email"class="label" >email</label>
                    </div>
                    
                    <div class="form-field  col-lg-6">
                        <input id="amount" class="input-text" type="number" min="0.00" max="25000.00" step="0.01" name="Amount">
                        <label for="phone"class="label" >Amount</label>
                    </div>
                    </div>

                </div>
                
                <div class="next-of-kin">
                    <h3>Next of Kin</h3>
                    <div class="row">
                    <div class="form-field  col-lg-6">
                        <input id="name" class="input-text" type="text" name="KinsName">
                        <label for="name"class="label" >name</label>
                    </div>
                    <div class="form-field  col-lg-6">
                        <input id="phone" class="input-text" type="tel" name="KinsPhoneNumber">
                        <label for="phone"class="label" >phone No</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-field  col-lg-12">
                       <select name="relationship">
                            <option value="Father">--Select</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Guardian">Guardian</option>
                            <option value="other">other</option>
                      </select>
                    </div>
                    </div>
                    
                    
                </div>
                
                <div class="form-field  col-lg-12">
                    <input class="submit-btn" value="Submit" type="submit" name="btn-apply">
                    
                </div>
            </div>
        </div>

    </section>
 
</body>
<!--footer-->
<div class="footer">
    <p>Ⓒ 2021 Gideon's Loan Ltd</p>
 </div> 
<!--footer-->
</html>
 
<?php
}
?>

