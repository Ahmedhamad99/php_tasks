<?php


$data_user = file_get_contents("data.json");
$dbDcod = json_decode($data_user, true);

echo "<table border=2>";
    echo "<tr>";
    echo "<th> Name </th>";
    echo "<th> Email </th>";
    echo "<th> image </th>";

    
    foreach($dbDcod as $value){
        echo "<tr>";
     echo "<td>".$value['name']."</td>";
     echo "<td>".$value['email']."</td>";
     echo "<td><img src='" . htmlspecialchars($value['image']) . "' width='150'/></td>";
     echo "</tr>";
        }
    
   
 echo "</table>";


?>
