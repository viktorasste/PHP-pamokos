<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.</title>
</head>
<?php
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    if ((substr($_SERVER['HTTP_USER_AGENT'], 0, 6) == "Opera/") || (strpos($userAgent, 'opera')) != false) {
        $image = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Opera_O.svg/2048px-Opera_O.svg.png" alt="Opera">';
        $body = '<body style="background-color:black">';
    } elseif ((strpos($userAgent, 'safari')) != false && (strpos($userAgent, 'chrome')) == false && (strpos($userAgent, 'chrome')) == false) {
        $image = '<img src="https://cdn-icons-png.flaticon.com/512/564/564442.png" alt="safari">';
        $body = '<body style="background-color:blue">';
    } elseif (preg_match('/edg/i', $userAgent)) {
        $image = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Microsoft_Edge_logo_%282019%29.svg/480px-Microsoft_Edge_logo_%282019%29.svg.png" alt="edge">';
        $body = '<body style="background-color:blue">';
    } elseif ((strpos($userAgent, 'chrome')) != false) {
        $image = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/480px-Google_Chrome_icon_%28February_2022%29.svg.png" alt="chrome">';
        $body = '<body style="background-color:red">';
    } elseif ((strpos($userAgent, 'firefox')) != false) {
        $image = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Firefox_logo%2C_2017.svg/1200px-Firefox_logo%2C_2017.svg.png" alt="firefox">';
        $body = '<body style="background-color:blue">';
    } else {
        $image = 'unrecognized';
        $body = "<body>";
    }
?>
<?php echo $body ?>
<?php echo $image ?>
</body>
</html>




<!-- 1. Sukurkite programą, kuri priklausomai nuo naršyklės (Chrome - "juoda", Mozzila - "raudona" ,  Edge - "melyna"), puslapis nusidažo atitinkama spalva. Taip pat, puslapyje priklausomai nuo naršyklės, turi atsirasti tos naršyklės logotipas.
P.S užduotį jau įkelti į GitHub -->

<!-- echo $_SERVER['HTTP_USER_AGENT']; -->
