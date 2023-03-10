<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 B</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $baris = $_GET['baris'];
    $kolom = $_GET['kolom'];
    ?>
    <form method="GET" action="soal1c.php">
        <table>
            <?php 
            for($x=0; $x<$baris; $x++){
                echo "<tr>";
                for($y=0; $y<$kolom; $y++){
                    echo "<td>";
                    echo $x+1;
                    echo ".";
                    echo $y+1;
                    echo ":";
                    echo "<input type='text' name='val[]'>";
                    echo "<input type='hidden' name='inp[]' value='".($x+1).".".($y+1)."'>";
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        
        <button type="submit" style="margin-left: 250px">Submit</button>
    </form>
    
    
</body>
</html>