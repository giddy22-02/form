<?php require_once 'db_connect.php'; ?>
 
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
    <title>Customer Info</title>
    
    <style type="text/css">
    .header{
      color:white;
      text-transform: uppercase;
      padding: 20px 10px; 
      height: 10%;
      width: 100%;
      background:linear-gradient(125deg,#a72879, #064496);
    }
    .header h3{
      display: flex;
      justify-content: center;
      font-size: 30px;
      font-family: Poppins;
    }
    .title{
    text-transform: capitalize;
    text-align: center;
    letter-spacing: 3px;
    font-size: 24px;
    font-weight: bold;
    line-height: 30px;
    padding-top: 10px;
    color: #5543ca;
    background: linear-gradient(to right, #f4524d 0%, #5543ca 100%);
     -webkit-text-fill-color:transparent;
     -webkit-background-clip: text;
}
        body {
            background-color:#E0CBD3;
        }
 
        .table {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
          
            
        }
        .btn{
            padding: 5px;
        }
      
        .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background:linear-gradient(125deg,#a72879, #064496);
    color: white;
    text-align: center;
    min-height: 5%;
    font-size: 16px;
  }
 
    </style>
    
 
</head>
<body>
<div class="header">
        <h3>Gideon's Loan Ltd.</h3>
</div>
<h5 class="title">Customers information</h5>



    <table cellspacing="0" cellpadding="5px">
        <thead>
            <tr>
                <th>Applicant Name </th>
                <th>Applicant ID  </th>
                <th>Applicant KRA </th>
                <th>Applicant Phone Number  </th>
                <th>Applicant Email  </th>
                <th>Amount  </th>
                <th>Kins Name  </th>
                <th>Kins Phone Number  </th>
                <th>Relationship  </th>
                <th>Action  </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM details";
            $result=mysqli_query($con, $sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo 
                    "<tr>
                        <td>".$row['ApplicantName']."</td>
                        <td>".$row['ApplicantId']."</td>
                        <td>".$row['ApplicantKRA']."</td>
                        <td>".$row['ApplicantPhoneNumber']."</td>
                        <td>".$row['ApplicantEmail']."</td>
                        <td>".$row['Amount']."</td>
                        <td>".$row['KinsName']."</td>
                        <td>".$row['KinsPhoneNumber']."</td>
                        <td>".$row['relationship']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'class='btn btn-info'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'class='btn btn-danger'>Remove</button></a>
                        </td>	
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>

 
</body>
<!--footer-->
<div class="footer">
      <p>Ⓒ 2021 Gideon's Loan Ltd</p>
   </div> 
<!--footer-->
</html>
