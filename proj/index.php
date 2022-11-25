<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body{
                background-image: url("./images/background.jpg");
                background-repeat: no-repeat;
                background-color: #cccccc;
                background-size: cover;
        }
        .center {
            margin: auto !important;
            background-color: black;
            margin-top: 5rem !important;
            width: 50% !important;
            border: 3px solid green !important;
            padding: 20px !important;
        }
        h2,p,label{
            color: white;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="file_upload.php" class="btn btn-danger ml-3">Upload a File</a>
    </p>
</body>
</html>