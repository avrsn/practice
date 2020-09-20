
<?php
    
    $errors = array('usernameErr'=>'');
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
            echo "Data Insert Successfully.";
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
        <link rel="stylesheet" href="style.css">
    </head>

    <body> 
        <h1>Registration Page</h1> 

        <form action="registration_page.php" method="POST" onSubmit="return checkRegistration()" autocomplete="off">
            <label> Desired Username </label>
            <input id="username" name="username" type="text" value=<?php echo htmlspecialchars($user) ?>>   
            <div class="red-text"><?php echo $errors['usernameErr']; ?></div>
            <label> Set Password (Must be at least 8 characters) </label>
            <input id="password" name="password" type="password">
            
            <input type="submit" name="submitBtn" value="Submit" />
          

        </form>

        <div>
            <a href='index.php'>Home</a>
        </div>

    </body>

</html>
