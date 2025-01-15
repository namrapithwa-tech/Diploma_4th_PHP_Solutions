<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            border-radius: 50%; width: 150px; height: 150px; object-fit: cover;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="f1" id=""><br></br>
        <input type="submit" value="Show profile picture">
    </form>
</body>
</html>

<?php
    if(isset($_FILES['f1']))
    {

        $file_name = $_FILES['f1']['name'];
        $file_size = $_FILES['f1']['size'];
        $file_tmp_name = $_FILES['f1']['tmp_name'];
        $file_type = $_FILES['f1']['type'];
        
        if(move_uploaded_file($file_tmp_name,"server_upload_files/".$file_name)) 
        {
            echo "profile picture change Successfully <br/>";
            echo "<img src=\"./server_upload_files/$file_name\">";
        }
        else
        {
            echo "Before Change Profile Pic: <br>";
            echo "<img src=\"./server_upload_files/images.jpeSg\">";
        }
        
        
    }
?>