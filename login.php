<?php require"functions.php";
      if($_SERVER['REQUEST_METHOD']=="POST"){
       
        $email=addslashes($_POST['email']);
        $password=addslashes($_POST['password']);
       
        $query="select*from users where email='$email' and password='$password'limit 1";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            $_SESSION['info']=$row;
            header("Location: profile.php");
            die;
        }else{
            $error="wrong email and pass";
        }
        
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in-my website</title>
</head>
<body>
<?php require "header.php";?>
<div style="margin:auto;max-width:600px">
    <?php
    if(!empty($error)){
        echo "<div>".$error."</div>";
    }
    ?>
    <h2 style="text-align:center">Login</h2>
<form method="post" style="margin: auto;padding:10px">
    
    <input type="email" name="email" placeholder="Email"required><br>
    <input type="password" name="password" placeholder="Passwod"required><br>
    <button>Login</button>

</form>
</div>
<?php require "footer.php";?>



</body>
</html>
