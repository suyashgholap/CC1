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
    <div class="wrapper center">
        <form action="uploader.php" method="post" enctype="multipart/form-data">  
            <label>Select File:</label> 
            <input type="file" class="form-control" name="fileToUpload"/>  
            <input type="submit" class="form-control" value="Upload Image" name="submit"/>  
        </form> 
    </div>    
</body>
</html>