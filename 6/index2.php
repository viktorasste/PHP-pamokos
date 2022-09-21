
<!-- prisijungimo forma -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
    
    <form method="post" action="manopaskyra.php">
    <input type="text" name="vardas" placeholder="Vardas">
    <input type="password" name="slaptazodis" placeholder="Slaptazodis">
    <button type="submit" name="prisijungti">Prisijungimas</button>
    </form>
    
    
    
    <?php

    if(isset($_POST["Prisijungti"])){
        $vardas = $_POST["vardas"];
        $slaptazodis = $_POST["slaptazodis"];

        $gvardas = "admin";
        $gSlaptazodis = "123";

        if($vardas == $gvardas && $slaptazodis == $gSlaptazodis){
            $_SESSION["arPrisijunges"] = 1;
            $_SESSION["vardas"] = "vardas";
            
            header("Location: manopaskyra.php");
        } else {
                    header("Location: index.php");
                }
            }
        
    
?>






    
    
</body>
</html>