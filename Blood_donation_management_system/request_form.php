<?php

                include("connection.php");

                if(isset($_POST["submit"]))
                {
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $dateentered = $_POST['dateentered'];
                    $hname = $_POST['hname'];
                    $location = $_POST['location'];
                    $quantity = $_POST['quantity'];
                    $reason =$_POST['reason'];
                     
                    
                        $check_query = "SELECT * FROM patient_register WHERE firstname = '$firstname' AND lastname = '$lastname'";
                        $check_result = mysqli_query($con, $check_query);
                        if(mysqli_num_rows($check_result) > 0) {
                            // Fetch the data from the user table
                            $patient_data = mysqli_fetch_assoc($check_result);
                            $age = $patient_data['age'];
                            $blood = $patient_data['blood'];
            
                            $query="INSERT INTO request_register(firstname, lastname,  email, dateentered, hname,location, quantity , reason, age, blood) VALUES('$firstname', '$lastname', '$email','$dateentered' ,'$hname','$location','$quantity','$reason','$age','$blood')";
                            $result = mysqli_query($con, $query);
                            if($result) {
                                header("location: home.php");
                            } else {
                                echo "<script type='text/javascript'> alert('Failed to insert data into request table: ')</script>";
                            }
                        } else {
                            echo "<script type='text/javascript'> alert('No match found in user table for provided details.')</script>";
                        }

                    
                  }	

	  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
            @import url("hhtps://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
*{
    margin: 0;
   padding: 0;
   text-decoration: none;
   list-style: none;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("img/ba.jpg");
    background-size: cover;
}

.register{
    background: transparent;
    border: 2px solid rgba(255,255,255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 30px 180px;
  
}
.register h1{
    font-size: 36px;
    color: darkcyan;
}
.register h1 i{
    font-size: 36px;
    color: darkcyan;
    cursor: pointer;
}
.register h2{
    font-size: 33px;
    color: darkcyan;
}
.register label{
    font-size: 20px;
    color: black;
}
.register input{
    width: 100%;
    height:43px;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    
    padding: 2px 15px 4px 15px;
}

.register input::placeholder{
    color: black;
    font-size: 16px;
  }
  .register textarea{
    width: 100%;
    height:43px;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    
    padding: 2px 15px 4px 15px;
}

.register textarea::placeholder{
    color: black;
    font-size: 16px;
  }

select{
    padding: 10px; /* Add padding for better visual appearance */
        font-size: 16px; /* Adjust the font size as needed */
        width: 300px; /* Adjust the width as needed */
        height: 40px;
        border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
        padding: 2px 15px 4px 15px;
}
.register .xyz  label{
    font-size: 20px;
    color: black;
  }

  .register .xyz input{
    color: #000000;    
    width: 5%;
    font-size: 18px;
}

.register .btn{
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
    margin-left: 100px;
}
    </style>
</head>
<body>
    <form method="POST" >
        <div class="register">
            <h1> <i class='bx bx-arrow-back' onclick="window.location.href='home.php'"></i>&nbsp;&nbsp; Request Form</h1><br><br>
            <label>Patient name*</label>
            <br>
            <input type="text" name="firstname" placeholder="Firstname">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lastname" placeholder="Lastname"><br><br>
            <label>Email*</label><br>
            <input type="email" name="email"><br><br>
            <label>Date:</label>
            <input type="date" name="dateentered">
             <br><br>
             <label>Hospital name*</label>
             <input type="text" name="hname" placeholder="hospital name"><br><br>
             <label>Hospital Location*</label><br>
             <textarea name="location" cols="65" rows="5" id="textarea"></textarea><br><br>
            <label>Quantity*</label>
            <input type="number" name="quantity" placeholder="units"><br><br>
            <label>Reason for Urgency*</label><br>
            <textarea name="reason" cols="65" rows="5" id="textarea"></textarea><br><br>
            <button type="submit" class="btn" name="submit" >Submit</button>
        </div>
    </form>
</body>
</html>