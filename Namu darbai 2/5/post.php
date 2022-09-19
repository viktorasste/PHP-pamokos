<?php


    if (isset($_POST['spalva']) && $_POST['spalva'] == "juoda"){
        echo '<body style="background-color:black">';
    } elseif(isset($_POST['spalva']) && $_POST['spalva'] == "raudona"){
        echo '<body style="background-color:red">';
    } elseif(isset($_POST['spalva']) && $_POST['spalva'] == "melyna"){
        echo '<body style="background-color:blue">';
    } else {
        echo "<body>";
    }



// ARBA---->
    
// $spalva = $_POST['spalva'];
    
    

//     if ($spalva == "juoda"){
//          echo '<body style="background-color:black">';
//     }
//     if ($spalva == "raudona"){
//         echo '<body style="background-color:red">';
//     }
//     if ($spalva == "melyna"){
//         echo '<body style="background-color:blue">';
//     }

    
?>



