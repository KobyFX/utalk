<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form action = 'signup.php' method = 'post'>
        <input type = 'text' name = 'username' class="form-control" value = '' placeholder = 'username'></br>
        <input type = 'text' name = 'email' class="form-control" value = '' placeholder = 'email'></br>
        <input type = 'password' name = 'password' class="form-control" value = '' placeholder = 'password'>

        </br>
        <button type = 'submit' name = 'submit' class="btn btn-primary">submit</button>
    </form>
    
</body>
</html>

<?php
require_once('connect.php');

if(isset( $_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($username) || empty($email) || empty($password)){
    echo 'fill the your fuckin fields properly';
}elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $sql = mysqli_query($conn, " insert into member values(id, '$username', '$password','$email')");
    echo 'you are in'. " " . $username;
}
}

mysqli_close($conn);

?>