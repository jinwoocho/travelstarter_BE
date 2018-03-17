<?php
require_once('mysql_connect.php');
//$query = "SELECT * FROM `travel_starter`";
$query = "INSERT INTO `users` SET `first_name` = $first_name, `last_name` = $last_name, `profile_picture` = $profile_picture, `gallery_pictures` = $gallery_pictures, `email` = $email, `facebook_id` = $facebook_id, `itinerary_id_list` = $itinerary_id_list";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output[] = $row;
//        var_dump($row);
        echo json_encode($row);
    }
}
?>
