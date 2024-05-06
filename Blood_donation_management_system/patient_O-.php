<?php
require('function.php');
 session_start();
 $con = mysqli_connect("localhost","root","","register1");
        $firstname="";
        $lastname="";
        $age="";
        $dob="";
        $email="";
        $phone="";
        $area="";
        $district = "";
        $state="";
        $blood="";

        $query="select * from patient_register where blood='O-'";
       
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
           
        }
        body{
            background-image: url("img/back1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .row1 .register{
            display: flex;
            align-items: center;
            background-color: #E3E6F3;
            padding: 15px;
        }
        .row1 .register h2{
            font-size: 36px;
            margin: 0;
        }
        .row1 .register  i.bx {
            margin-right: 500px;
            cursor: pointer;
            font-size: 36px;
            right: 10px;
            left: 10px;
        }
        .row .col-md-8 table {
            width: 90%;
            margin: auto;
            
        }
        
        .row .col-md-8  th, td {
            border: 1px solid;
            text-align: left;
            padding: 8px;
            
        }
    </style>
</head>
<body>
<div class="row1">
    <div class="register">
    <i class='bx bx-arrow-back' onclick="window.location.href='patient_count.php'"></i>
        <h2>Count</h2>
    </div>
<br><br>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="">
            <table>
            <tr>
                <th>firstname:</th>
                <th>lastname:</th>
                <th>Age</th>
                <th>date-of-birth</th>
                <th>Email:</th>
                <th>number</th>
                <th>area:</th>
                <th>District:</th>
                <th>State</th>
                <th>blood:</th>
                
            </tr>
            <?php
               $query_run=mysqli_query( $con, $query );
               while($row= mysqli_fetch_assoc($query_run)){
                $firstname=$row["firstname"];
                $lastname=$row["lastname"];
                $age=$row["age"];
                $dob=$row["dob"];
                $email=$row["email"];
                $num=$row["num"];
                $area=$row["area"];
                $district = $row['district'];
                $state= $row['state'];
                $blood=$row["blood"];
                
                
               
            ?>
                    <tr>
                        <td><?php echo $firstname;?></td>
                        <td><?php echo $lastname;?></td>
                        <td><?php echo $age;?></td>
                        <td><?php echo $dob;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $num;?></td>
                        <td><?php echo $area;?></td>
                        <td><?php echo $district;?></td>
                        <td><?php echo $state;?></td>
                        <td><?php echo $blood;?></td>
                        
                    </tr>
            <?php
            }
            ?>
        </table>
        </form>
    </div>
   </div>
</body>
</html>