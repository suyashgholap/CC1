<?php
    session_start();
    $target_path = "./data/";  
    $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
        echo '<script>alert("File uploaded successfully")</script>'; 
    } else{  
        echo "Sorry, file not uploaded, please try again!";  
    }
?>