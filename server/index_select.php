<?php
require_once('mysql_connect.php');
$query = "SELECT * FROM `travel_starter`";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
//        $output[] = $row;
//        var_dump($row);
        echo json_encode($row);
    }
}
?>
