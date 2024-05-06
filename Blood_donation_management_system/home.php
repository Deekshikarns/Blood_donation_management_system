<?php
session_start();
include("connection.php");


if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if($result && mysqli_num_rows($result) > 0) {
       
        $fetch_info = mysqli_fetch_assoc($result);
    } else {
        
        header('Location: login.php');
        exit; 
    }
} else {
  
    header('Location: login.php');
    exit; 
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="cse.css">
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
    background-position: center; 
    background-repeat: no-repeat;

}
      .ab  h1{
           margin-left: 200px;
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


           
         #blog{
        display: flex ;
        justify-content: center;
        align-items: center;
}

        #blog{
        padding: 10px 10px 0 10px;
        display: flex ;
        justify-content: center;
        align-items: center;
}
.honey{
        max-width: 1000px;
        background-image: url('img/ba.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
}
.honey .main{
            text-align: center;
        }
.honey .main h1{
            font-size: 42px;
        }
.honey .main p{
            font-size: 22px;
        }
.diya {
        max-width: 1000px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
#blog .diya{
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
    list-style: none; 
    padding-left: 0; 
}

#blog .blog-details li {
    margin-bottom: 10px; 
}

#blog .blog-details li:before {
    content: "•"; 
    color: black; 
    display: inline-block;
    width: 1em; 
    margin-left: -1em; 
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
     </style>
</head>
<body>
<section class="menu">
<div class="menu-bar">
        <ul>
            <li><a class="active" href="home.php">Home</a></li>
           
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
                                        <li class="hover-me"> <?php echo "<span style='color: red;'>".$fetch_info['firstname']." ".$fetch_info['lastname']."</span>"; ?></li> 
                                        <li class="hover-me"><a href="#" onclick="window.location.href='edit.php'">Edit Profile</a></li>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='view.php'">view profile</a></li>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='logout.php'">LogOut</a></li>
                                       
                                    </ul>
                    </div>
                </li>
                
            </ul>
        </div>    
    </section>
<div class="ab">
    <h1>Welcome ! <?php echo "<span style='color: black;'>".$fetch_info['firstname']." ".$fetch_info['lastname']."</span>"; ?></h1>
</div>
    <section id="blog">
      <div class="honey">
      <div class="main">
    <h1>The Blood Donation Process</h1><br>
    <p>The blood donation process from the time you arrive until the time you leave takes about an hour.</p>
    <p>The donation itself is only about 8-10 minutes on average.</p>
</div>
      <div class="diya">
      <form >
       
        <h1>Registration</h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/form.jpg" alt="">
            </div>
            <div class="blog-details">
                <ul>
                    <li>We’ll sign you in and go over <a href="eligibility.php">basic eligibility</a>.</li>
                    <li>You’ll be asked to show ID, such as your driver’s license.</li>
                    <li>You’ll read some information about donating blood.</li>
                    <li>We’ll ask you for your complete address. Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation.</li>
                </ul>
            </div>

            
        </div>
       
      </form>
      </div>

      <div class="diya">
      <form >
       
        <h1>Health History</h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/health.jpg" alt="">
            </div>
            <div class="blog-details">
             <li>You’ll answer a few questions about your health history and places you’ve traveled, during a private and confidential interview.</li>
             <li>You’ll tell us about any prescription and/or over the counter medications that may be in your system </li>
             <li>We’ll check your temperature, pulse, blood pressure and hemoglobin level. </li>
            </div>
            
        </div>
       
      </form>
      </div>
      <div class="diya">
      <form >
       
        <h1>Your Donation </h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/form.jpg" alt="">
            </div>
            <div class="blog-details">
             <li>If you’re donating whole blood, we’ll cleanse an area on your arm and insert a brand new sterile needle for the blood draw .</li>
             <li>Other types of donations, such as platelets, are made using an apheresis machine which will be connected to both arms .</li>
             <li>You’ll read some information about donating blood. </li>
             <li>We’ll ask you for your complete address.  Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation</li>
            </div>
            
        </div>
       
      </form>
      </div>
      </div>
        </section>
        
</body>
</html>