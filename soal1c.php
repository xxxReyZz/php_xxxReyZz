<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 C</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $val = $_GET['val'];
    $inp = $_GET['inp'];
        for($x=0; $x<count($inp); $x++){
            echo "<b>";
            echo $inp[$x];
            echo " : ";
            echo $val[$x];
            echo "</b>";
            echo "<br>";
        }
    ?>
</body>
</html>