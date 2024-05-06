<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cse.css">
    <style>
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
            border-bottom: 1px dotted #fff;
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

       
         #blog{
        display: flex ;
        justify-content: center;
        align-items: center;
}
.main-content{
        max-width: 1000px;
        background-image: url('img/ba.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
}
.main-content .main{
            text-align: center;
        }
.main-content .main h1{
            font-size: 36px;
        }
.main-content .main p{
            font-size: 18px;
        }
.dbms{
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
        #blog .dbms{
     width: 700px;
    background: #fff;
     text-align: center;
    border-radius: 10px;
    padding: 5px 20px;
    left: 20px;
}


#blog .blog-box{
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  padding-bottom: 90px;
}

#blog .blog-img{
  width: 50%;
  margin-right: 40px;
}

#blog img{
  width: 100%;
  height: 300px;
  object-fit: cover;
}
#blog .blog-details{
  width: 50%;
}
#blog .blog-details ul {
    list-style: none; /* Remove default list styles */
    padding-left: 0; /* Remove default padding */
}

#blog .blog-details li {
    margin-bottom: 10px; /* Adjust spacing between each list item */
}

#blog .blog-details li:before {
    content: "•"; /* Use a bullet point character as the bullet */
    color: black; /* Change the color if needed */
    display: inline-block;
    width: 1em; /* Adjust spacing between the bullet and the text */
    margin-left: -1em; /* Adjust spacing between the bullet and the text */
}



#blog .blog-details a{
  text-decoration: underline;
}

#blog .blog-box h1{
  position: absolute;
  top: -40px;
  left: 0;
  font-size: 70px;
  font-weight: 700;
  color: #c9cbca;
  z-index: -9;
}
.AB .dbms1{
    width: 50%;
  margin: 30px auto;
  text-align: center;
 
}
.AB .dbms1 video{
 width: 50%; /* Adjust the width of the video */
  border-radius: 20px;
  
}
.dbms1 h1{
    font-size: 36px;
    text-align: center;
}
    </style>
</head>
<body>
<section class="menu">
<div class="menu-bar">
         <ul>
            <li><a class="active"  href="home.php">Home</a></li>
           
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
<section class="AB">
    
</div>
</section>
<section id="blog">
<div class="main-content">
<div class="main">
    <h1>Requirements by Donation Type</h1><br>
    <p>To ensure the safety of both patients and donors, these are some of the requirements donors must meet to be eligible to donate blood based on</p>
    <p>heir donation type. To explore a list of eligibility information.</p>
      <div class="dbms">
      <form >
       
        <h1>Registration</h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/form.jpg" alt="">
            </div>
            <div class="blog-details">
                <ul class="eligibility-list">
                    <li>Minimum age requirement: 17 years.</li>
                    <li>Minimum weight requirement: 110 pounds (50 kilograms).</li>
                    <li>Good health status without acute or chronic illnesses.</li>
                    <li>Adequate hemoglobin levels (typically within the range of 12.5 to 13.5 g/dL).</li>
                    <li>Disqualification due to high-risk behaviors, such as intravenous drug use or unprotected sexual activity.</li>
                    <li>Minimum interval between blood donations (usually around 8 weeks) to allow for adequate recovery.</li>
                </ul>
            </div>

            
        </div>
       
      </form>
      </div>
</div>

<div class="dbms1">
    <h1>Blood Donation Process in 2 min </h1><br><br>
   
     <video autoplay muted loop src="img/video.mp4"></video>
</div>
</section>
</body>
</html>