<?php

    require_once 'server.php';
    
    $user = $pass = '';
    $errors = array('login_failure_message'=> '');

    if (isset($_POST['submitBtn'])) {
        
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $query = "SELECT usernameCol, passwordCol FROM `users` WHERE usernameCol = '$user';";

        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($pass, $row['passwordCol'])) {
                    echo "Login successful.";
                }
            }
        } else {
            $errors['login_failure_message'] = 'Username or Password is incorrect.';
        }

        
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>practice_area</title>
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="navbar">
        <div id="login_authenticator">
            <form action="index.php" method="POST">
                <label> Username </label>
                <input id="username" name="username" type="text" />
                <label> Password </label>
                <input id="password" name="password" type="password" />
                <div class="red-text"><?php echo $errors['login_failure_message']; ?></div>
                <button type="submit" name="submitBtn" value="Login">Login</button> 
            </form>

            <div id="register">
                <a href="registration_page.php"> Register </a>
            </div>
        </div>
    </div>
    
    <div id="homepage_image">
        <img title="tiger tat" id="picture"  src="tattoo-masters-flash-collection-part1_6_web.jpg" />
    </div>

    

    
</body>

</html>