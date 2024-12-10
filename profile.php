<?php
require "functions.php";
check_login();
if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['username'])){
    $username=addslashes( $_POST['username']);
    $email=addslashes($_POST['email']);
    $password=addslashes($_POST['password']);

    $query="insert into users (id,username,email,password,date) values('$id','$username','$email','$password','$date')";
    $result=mysqli_query($con,$query);
    header("Location: login.php");
    die;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-my website</title>
</head>
<body>
<?php require "header.php";?>
<div style="margin:auto;max-width:600px">
    <?php if(!empty($_GET['action']) && $_GET['action']='edit'):?>
        <h2 style="text-align:center">Edit profile</h2>
<form method="post" style="margin: auto;padding:10px">
    image:<input type="file" name="image" required><br>
    <input value="<?php echo $_SESSION ['info']['username']?>" type="text" name="username" placeholder="Username" required><br>
    <input value="<?php echo $_SESSION ['info']['email']?>" type="email" name="email" placeholder="Email" required><br>
    <input value="<?php echo $_SESSION ['info']['password']?>" type="password" name="password" placeholder="Passwod" required><br>
    
    <button>Save</button>
    <a href="profile.php"><button type="button">Cancel</button></a>

</form>
        <?php else:?>
    <h2 style="text-align:center">User Profile</h2>
    <div style=" margin:auto; max-width:600px; text-align:center;">
        <tr>
            <td><img src="img.jpg" style="width: 150px;height: 150px;object-fit:cover"></td>
        </tr>
        <tr>
            <td><?php echo  $_SESSION['info']['username']?></td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['info']['email']?></td>
        </tr>
        <a href="profile.php?action=edit"><button>Edit profile</button></a>
</div>
<br>
<hr>
<h5>Create a post</h5>
<form method="post" enctype="multipart/form-data" style="margin: auto;padding:10px">

   
    <textarea name="post" rows="8"></textarea><br>

    <button>Post</button>

</form>
<?php endif;?>

<?php require "footer.php";?>



</body>
</html>
