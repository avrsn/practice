
<?php
    
    $errors = array('usernameErr'=>'&nbsp;');
    $user = '';

    require_once 'server.php';
    session_start();

    if (isset($_POST['submitBtn'])) {
        
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $query = "INSERT INTO `users`(`usernameCol`, `passwordCol`) VALUES ('$user', '$hash');";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $errors['usernameErr'] = "Account created successfully!";
        } else {
            $errors['usernameErr'] = 'Username is already taken.';
            
        }
    }

?>
<!DOCTYPE html> 
<html>

    <head> 
        <title> Registration Page </title>
        <script type="text/javascript" src="javascript.js"></script>
        <link rel="stylesheet" href="registration_style.css">
    </head>

    <body> 
       

        <div id="registration_form">
            <form action="registration_page.php" method="POST" onSubmit="return checkRegistration()" autocomplete="off">
                <label> Desired Username </label>
                <input id="username" name="username" type="text" value=<?php echo htmlspecialchars($user)?>>  
                </br>
                <label> Set Password (Must be at least 8 characters) </label>
                <input id="password" name="password" type="password">
                <div id="red-text"><?php echo $errors['usernameErr'];?></div>
                <input type="submit" id="submitBtn" name="submitBtn" value="Submit"/>
            
            </form>

            <div id="home">
                <a href='index.php'>Home</a>
            </div>
        </div>

        

        <div id="login_logo">
            <img title="red_login" id="red_login" src="login 460x301.png" />
        </div>

        <div id="homepage_image">
            <img title="tiger tat" id="picture"  src="tiger 2.png" />
        </div>

    </body>

</html>
