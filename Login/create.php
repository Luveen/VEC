<?php
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" id = "right-content">
               <div class="stclogo text-center">
                <img src="https://upload.wikimedia.org/wikipedia/en/b/bc/S_Thomas_College_ML_crest.png" alt="">
               </div>

               <div class="rcon text-center">
                <h1>S.Thomas Collage</h1>
                <h2>Virtual Exam</h2>

                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate animi adipisci soluta molestias consectetur accusamus laudantium? Quidem, necessitatibus dolores ut, saepe, recusandae eveniet tempora repudiandae laboriosam repellendus odio quos!</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus quam commodi perferendis neque? Atque ipsa quasi, facere veniam nulla praesentium illum vitae repellat vel sed fugiat nobis dolorem aperiam? Ipsum.</li>
                    <li>Lorem ipsum asdjak dolor sit amet consectetur adipisicing elit. Sapiente officia mollitia consequuntur! Veniam libero aliquid aspernatur. Tenetur, iste accusamus! Aperiam incidunt veritatis pariatur, quod iste libero eos perspiciatis aut minima.</li>
                </ul>
                
               </div>

              
            </div>
            
            <div class="col-md-6">
                <div class="left-content" id = "Left-con">
                 
                <form method="post">
                    <h1 class= "text-center">Create your Account <br> <span>Create an account to join the Virtual Academy</span></h1>
                    <form method="post">
                    <div class="formcon">
                    <label for="fname"><b>Full Name</b></label> <br>
                    <input type="text" name="fname" > <br>

                    <label for="email"><b>Email</b></label> <br>
                    <input type="email" name="uemail"> <br>

                    <label for="password"><b>Password</b></label> <br>
                    <input type="password" name="upassword" > <br>

                    <label for="password"><b>Confirm Password</b></label> <br>
                    <input type="password" name="cupassword"> <br> 

                    
                    <div class="radiobtns" id = "radiobtn">
                    <label for="admin">Admin</label>
                    <input type="checkbox" name="role" value = "Admin"> 

                    <label for="Lecture">Lecture</label> 
                    <input type="checkbox" name="role"  value = "Lecture">

                    <label for="Student">Student</label> 
                    <input type="checkbox" name="role" value = "Student">
                    </div>

                   

                    </form> 
                 
                     
                   
                    <div  class = "subbut">
                    <button type="submit" name = "savebtn">Create Your Account</button><br>

                        
                    </div>
                    <div class="loginlink">
                     <a href="login.php ">already have an account? </a>
                    </div>
                   
                    </div>
                    
                    
                    <div class="note text-center">
                        <h5>by creating an account you agree to our <span>Terms of <br> service  </span> and <span> Privacy Policy </span></h5>
                    </div>                    
                    </div>
                   

                 </form>
                 
                </div>
            </div>
            

            
            
        </div>


    </div>

    <?php
    include 'conn.php';
    
    if(isset($_POST['savebtn'])){
        $roles = $_POST['role'];
        $nusername = $_POST['fname'];
        $nuseremail = $_POST['uemail'];
        $nuserpassword = $_POST['upassword'];
        $nuserconfirmpassword = $_POST['cupassword'];

        $sql = "INSERT INTO `stcsignup` (`role`, `fullname`, `email`, `pass`, `confirmpassword`) VALUES ('$roles', '$nusername', '$nuseremail', '$nuserpassword', '$nuserconfirmpassword')";

        $status = mysqli_query($con,$sql);

        if($status){
            echo "Successfully Created!";
            
        }else{
            echo "Error!";
        }
    }
    
    
    ?>
</body>
</html>