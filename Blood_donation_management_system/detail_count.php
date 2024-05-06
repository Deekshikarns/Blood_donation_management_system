<?php
require('function.php');
 session_start();
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


            .row{
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
            text-align: center;
            margin: 0;
            }
            .row .col-md-3{
                width: 26.1%;
                min-width: 250px;   
                border: 2px solid black;
                border-radius: 20px;
                cursor: pointer;
                box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
                transition: 0.2s ease;
                position: relative;

            }
            .row .col-md-3 .card {
                padding: 10px 0;
                width: 400px;

            }
            .row .col-md-3 .card .card-header{
                font-size: 38px;
            
            }
            .row .col-md-3 .card .card-header .card-body{
                text-align: center;
            }
            .card-body .card-text{
                font-size: 36px;
                text-align: center;
            }
           .card-body .btn {
                width: 60px;
                height: 60px;  
                color: black;
                border: 2px solid bisque;
                background-color: bisque;
                bottom: 20px;
                right: 10px;
                font-size: 28px;
                position: static;
                text-decoration: none;
                
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
                <li><a class="active" href="detail_count.php">Donation</a></li>
                <li><a href="search.php">Blood stock</a></li>
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
    <br><br>
    <section class="row">
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">Donors:</div><br>
                <hr><br><br>
                <div class="card-body">
                    <p class="card-text">No. of Donors: <?php echo get_donor_count();?></p><br><br>
                    <a href="donor_count.php" class="btn" >View Donors</a>
                </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">Patient:</div><br>
                <hr><br><br>
                <div class="card-body">
                    <p class="card-text">No. of Patient: <?php echo get_patient_count();?></p><br><br>
                    <a href="patient_count.php" class="btn" target="_blank">View Patient</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">Blood Requests:</div><br>
                <hr>
                <br><br>
                <div class="card-body">
                    <p class="card-text">No. of total requests: <?php echo get_user_count();?></p>
                    <br><br>
                    <a href="request_details.php" class="btn" >View Blood Request</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>