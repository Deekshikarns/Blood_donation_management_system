<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    $blood = $_POST["blood"];
    $district=$_POST["district"];
    $sql = "SELECT * FROM donor_register WHERE blood='$blood' AND district='$district';";
    $result = mysqli_query($con, $sql);
} else {
    $result = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @import url("hhtps://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
      *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }
        body{
            font-family: "Poppins",sans-serif;
            background: url('img/back1.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        }
        .menu{
            min-height: 20vh;
        }
         
        .menu .menu-bar{
                background: #E3E6F3;
                text-align: center;
            }
            .menu .menu-bar ul{
                display: inline-flex;
                list-style: none;
                color: #fff;
            }
            .menu .menu-bar ul li{
                width: -50px;
                margin: 26px;
                padding: 15px;
            }
            .menu .menu-bar ul li a{
                text-decoration: none;
                color: #1a1a1a;
                font-size: 18px;
                font-weight: 200;
            }
            .menu .menu-bar ul li a:hover{
                color: #088178;
                border-radius: 3px;
            }
             
            .menu .menu-bar ul li img{
              width: 35px;
              margin-top: -27px;
              height: 35px;
            }
            .menu .sub-menu-1{
                display: none;
            }
            .menu .menu-bar ul li:hover .sub-menu-1{
                display: block;
                position: absolute;
                background: #E3E6F3;
                margin-top: 15px;
                margin-left: -15px;
            }
            .menu .menu-bar ul li:hover .sub-menu-1 ul{
                display: block;
                margin: 10px;
            }
            .menu .menu-bar ul li:hover .sub-menu-1 ul li{
            width: 150px;
            padding: 10px;
            border-bottom: 1px solid black;
            background: transparent;
            border-radius: 0;
            text-align: left;
            }
            .menu .menu-bar ul li:hover .sub-menu-1 ul li:last-child{
                border-bottom: none;
            }
            .menu .menu-bar ul li:hover .sub-menu-1 ul li a:hover{
                color: #088178;
            }
            .menu .fa-angle-right{
                float: right;
            }
            .menu .sub-menu-2{
                display: none;
            }
            .menu .hover-me:hover .sub-menu-2{
                position: absolute;
                display: block;
                margin-top: -40px;
                margin-left: 140px;
                background: #E3E6F3;
            }
            .pro{
                display: flex ;
                justify-content: center;
                align-items: center;
            }
            .pro .pro1{
                max-width: 700px;
                background-image: url('img/blood.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            .pro .pro2{
                width: 400px;
                background: #fff;
                text-align: center;
                border-radius: 10px;
                padding: 5px 15px;
                left: 20px;

            }
            .pro .dbms{
                text-align: center;
               
            }
            .pro .pro2 h1{
                font-size: 36px;
            }
            .pro .dbms label{
                font-size: 22px;
            }
            .pro .dbms .pro3{
                padding: 10px; /* Add padding for better visual appearance */
                font-size: 16px; /* Adjust the font size as needed */
                width: 250px; /* Adjust the width as needed */
                height: 40px;
                border: 2px solid  black;
                border-radius: 40px;
                padding: 2px 15px 4px 15px;

            }
            .pro .pro1 .btn{
                width: 50%;
                height: 45px;
                background-color: rgb(247, 183, 138);
                border: none;
                outline: none;
                border-radius: 40px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                font-size: 20px;
                cursor: pointer;
                font-weight: 600;
                color: black;
            }
            .row  h1{
                font-size: 38px;
                text-align: center;
                margin-top: 40px;
            }
           
            .row .column .card .container table {
                        border-collapse: collapse;
                        width: 100%;
                        margin-top: 20px;
                    }

           .row .column .card .container  table, th, td {
                        border: 1px solid black;
                    }

          .row .column .card .container  th, td {
                        padding: 8px;
                        text-align: left;
                    }
                    .register label{
                       font-size: 22px;
                    }

                    .register textarea{
                        width: 60%;
                        height:40px;
                        border-radius: 40px;
                        font-size: 22px;
                        padding: 2px 15px 4px 15px;
                    }

                    .register textarea::placeholder{
                        color: black;
                        font-size: 16px;
                     }

        
            
    </style>
</head>
<body>
<section class="menu">
<div class="menu-bar">
        <ul>
            <li><a  href="home.php">Home</a></li>
           
                <li><a href="#">Register</a>
                    <div class="sub-menu-1">
                                    <ul>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='donor_register.php'">Donor</a></li>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='patient_register.php'">Receiver</a></li>
                                    </ul>
                    </div>
                </li>
                <li><a href="request_form.php">Blood Request</a></li>
                <li><a href="detail_count.php">Donation</a></li>
                <li><a class="active" href="search.php">Blood stock</a></li>
                <li><a href="#"><img src="img/pro.png"></a>
                    <div class="sub-menu-1">
                    
                                    <ul>
                                    <li class="hover-me"><a href="#" onclick="window.location.href='edit.php'">Edit Profile</a></li>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='view.php'">view profile</a></li>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='logout.php'">LogOut</a></li>
                                    </ul>
                    </div>
                </li>
                
            </ul>
        </div>    
    </section>

    <section class="pro">
        <div class="pro1">
            <div class="pro2">
            <h1>Search The Donors</h1><br>
    <div class="dbms">
    <form class="" action="" method="POST">
        <label for="blood">Blood type:</label><br><br>
        <select class="pro3" name="blood">
            <option>   -----Select Blood Group-----</option>
            <option>  A+</option>
            <option>  A-</option>
            <option>  B+</option>
            <option>  B-</option>
            <option>  AB+</option>
            <option>  AB-</option>
            <option>  O+</option>
            <option>  O-</option>
        </select><br><br>
                    </div>
        <div class="register">
        <label>district*</label><br><br>
        <textarea name="district" cols="35" rows="5" id="textarea"></textarea><br><br>
        </div>
    <button type="submit" class="btn" name="submit">Search</button></form>
</div>
</div>
    </section>
    <?php
    if (!empty($result)) {
        // Display search results only if $result is not empty
    ?>
    <div class="row">
    <h1>Details of Donors</h1>
        <?php
        while ($data1 = mysqli_fetch_assoc($result)) {
            // Display donor details
        ?>
    <div class='column'>
                <div class='card'>
                  
                    <div class='container'>
                        <table>
                            <tr>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>Age</th>
                                <th>Blood Type</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>State</th>
                                <th>Phone number</th>
                                <th>Date of birth</th>
                            </tr>
                            <tr>
                                <td><?php echo $data1['firstname']; ?></td>
                                <td><?php echo $data1['lastname']; ?></td>
                                <td><?php echo $data1['age']; ?></td>
                                <td><?php echo $data1['blood']; ?></td>
                                <td><?php echo $data1['area']; ?></td>
                                <td><?php echo $data1['district']; ?></td>
                                <td><?php echo $data1['state']; ?></td>
                                <td><?php echo $data1['num']; ?></td>
                                <td><?php echo $data1['dob']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    }  
    
    ?>



</body>
</html>