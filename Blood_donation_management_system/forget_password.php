<?php
      include("connection.php");

      if(isset($_POST["submit"]))
	{
	  $email = $_POST['email'];
      $password = $_POST['password'];
      $confirmpassword = $_POST['confirmpassword'];

      $query  ="select*from dbms where email='$email'";
      $query_check = mysqli_query($con,$query);
      
      if($query_check){
          
         if(mysqli_num_rows($query_check) > 0){
            if($password==$confirmpassword){
             
             $query1 ="update dbms set password='$password' where email='$email'";
             $query_run = mysqli_query($con,$query1);
             if($query_run){
                echo "<script type='text/javascript'> alert('Successfully changed ....')</script>";
                header("location: login.php");
                die();
            }
        }
        echo "<script type='text/javascript'> alert('Password and confirm password is not matched....')</script>";
    }            
    }
        echo "<script type='text/javascript'> alert('email not found....')</script>"; 
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
box-shadow: border-box;
font-family: "Poppins",sans-serif;

}
body{
    display: flex ;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(img/log.jpg);
    background-size: cover;

}
.xyz
{
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255,255, 0.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    color: white;
    border-radius: 10px;
    padding: 30px 40px;

}
.xyz h1{
    font-size: 28px;
    color: #43494f;

}

.xyz .main{
    width: 100%;
    height: 60px;
    margin: 30px 0;
}

.main input{
    width: 100%;
    height: 80%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255,255, 0.2);
    border-radius: 40px;
    font-size: 18px;
    color: rgb(32, 34, 36);
    padding: 2px 15px 4px 15px;
}
.main input::placeholder{
    color: #081b29;
}

.xyz .BTN{
    width: 45%;
  height: 45px;
  background: rgb(253, 213, 159);
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px  rgba(0,0,0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
  margin-left: 130px;
}

    </style>
</head>
<body>
<div class="xyz">
    <form  method="POST">
        <h1>Forget Password</h1>
        <div class="main">
            <input type="email" name="email" placeholder="Email*" required>
           
        </div>

        <div class="Chandana">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="PASSWORD" required>
            </div>

            <div class="Chandana">
                <label for="password"></label>
                <input type="password" name="confirmpassword" id="password" placeholder="CONFIRMPASSWORD" required>
            </div>


      
        <button type="submit" class="BTN" name="submit">Next</button>
        

    </form>
    </div>
</body>
</html>