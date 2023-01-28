
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
    <div class="headline text-center">
    <h1>School Registration System</h1>
    </div>
    </div>

    <div class="row">
        <div class="logo text-center">
            <img src="https://upload.wikimedia.org/wikipedia/en/b/bc/S_Thomas_College_ML_crest.png" alt="SchoolLogo.png">
        </div>
    </div>

   <div class="row">
    <div class="lhead text-center">
        <h1>Login</h1>
    </div>
   </div>

   <div class="row">
    <div class="col-md-12">
        <div class="crad">
            <form method="post">
            <label for="email"><b>Email</b></label> <br>
            <input type="email" placeholder="Enter email" name="uname" required> <br>
            <br>
            <label for="uname"><b>Password</b></label> <br>
            <input type="password" placeholder="Enter password" name="upass" required>
            <br>
           <button type="submit" name = "btnsave">Login</button>
                   <div class="signuplink">
                     <a href="create.php ">Dont have an Account?</a>
                    </div>
              
            </form>
        </div>
    </div>

   </div>
</div>




<?php
      @include 'conn.php'; 
      session_start();

    if(isset($_POST['btnsave'])){
        $fullname = $_POST['fullname'];
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
        $role = $_POST['role'];

        $sql = "SELECT * FROM stcsignup WHERE email='$uname' AND pass ='$upass'";
        $status = mysqli_query($con,$sql); 

        if(mysqli_num_rows($status) > 0){

            $row = mysqli_fetch_array($status);
      
            if($row['role'] == 'Admin'){
                
               $_SESSION['admin_name'] = $row['fullname'];
               header('Location:admin.php');
      
            }elseif($row['role'] == 'Student'){
      
               $_SESSION['user_name'] = $row['fullname'];
               header('Location:student.php');
      
            }
            elseif($row['role'] == 'Lecture'){
                $_SESSION['Lecture_name'] = $row['fullname'];
                header('Location:Lecture.php');
            }
           
         }else{
            echo "Error in Login!";
         }
    };



     
    ?>
</body>
</html>