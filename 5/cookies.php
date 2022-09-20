<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php

    if(!isset($_COOKIE["skaitiklis"])){

    
    setcookie("skaitiklis", 1, time()+3*3600);

    // setcookie("skaitiklis", "", time()-3600); trina sausainuka
    
    // echo $_COOKIE["skaitiklis"];
}
        $i = 0;
        $i++;
        echo $i;





?>
</body>
</html>