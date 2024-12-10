<style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
        }
        body {
            background-color: #f7f7eb;
            font-family: Tahoma, sans-serif;
        }
        header {
            background-color: #766ecc;
            display: flex;          
            justify-content: center;  
            align-items: center;      
            padding: 10px 0;
        }
        header a {
            color: white;
            margin: 0 15px;
            font-weight: bold;
        }
        footer{
            padding: 20px;
            text-align: center;
            background-color: #eee;
        }
        input{
            margin: 4px;
            padding:8px;
            width: 100%;
        }
        textarea{
            margin: 4px;
            padding:8px;
            width: 100%;
        }
        button{
            padding:10px;
            cursor: pointer;
        }
    </style>

    <header>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <?php 
        if(empty($_SESSION['info'])):?>
        <a href="login.php">Log in</a>
        <a href="signup.php">Sign up</a>
        <?php else:?>
        <a href="logout.php">Log out</a>
        <?php endif;?>

    </header>
