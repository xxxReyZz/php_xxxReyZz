<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal 2</title>
</head>
<body>
    <form method="get">
        <input type="text" name="search" id="search" placeholder="search by hobi">
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <td>Hobi</td>
                <td>Jumlah Person</td>
            </tr>
            <?php
            $search = $_GET['search'];
            $sql = "SELECT a.hobi, COUNT(a.person_id) as jumlah_person FROM hobi a WHERE a.hobi LIKE '%".$search."%' GROUP BY a.hobi";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>";
                  echo $row['hobi'];
                  echo "</td>";
                  echo "<td>";
                  echo $row['jumlah_person'];
                  echo "</td>";
                  echo "</tr>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
            ?>
        </thead>
    </table>
</body>
</html>