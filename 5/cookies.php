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

    
    setcookie("skaitiklis", 0, time()+3*3600);
        $i = 0;
    }
            else{
                $i = $_COOKIE["skaitiklis"];
                $i++;
                setcookie("skaitiklis", time()+3*3600);
            }
        }
    // setcookie("skaitiklis", "", time()-3600); trina sausainuka
    
    // echo $_COOKIE["skaitiklis"];
}


        $i = $_COOKIE["skaitiklis"];
        $i++;
        echo $i;





?>
</body>
</html>