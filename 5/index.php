<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobalus kintamieji</title>
</head>
<body>
    <!-- 1.metodas turi buti butinia su POST. GET neveiks -->
    <form method="post" action="index.php" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="text" name="file_name">
            <button type="submit" name="upload">Ikelti</button>


    </form>
</body>
</html>

<?php
        if(isset($_POST["upload"])){
                $fila_name = $_POST["file_name"];
                $file  = $_FILES["file"];

                // var_dump($file);

                $file_dir = "uploads/";

                $file_name_generated = "failas.jpg";


                $file_name_array = explode(".", $file["name"]);
                $file_extension = $file_name_array[1];

                var_dump("$file_name_array");

                $file_path = $file_dir . $file_name_generated = "failas.jpg";
                
                // var_dump($file_path);

                if(move_uploaded_file($file["tmp_name"],$file_path)){
                    echo "failas ikeltas sekmingai";
                } else{
                    echo "failo ikelti nepavyko";
                }
        }


?>