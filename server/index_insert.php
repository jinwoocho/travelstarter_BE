
<?php

//$id = $_POST['id'];
//$name = $_POST['name'];
//$data_queried = $_POST['data_queried'];



require_once('mysql_connect.php');
$query = "INSERT INTO `activities`(`id`,`name`,`date_queried`,`place_id`,`city_id`,`longitude`,`latitude`,`images`,`snippet`,`hashtags`,`tag_label`) VALUES ('" . $id . "', " . $name . ", '" . $date_queried . "' , '" . $place_id . "', '" . $city_id . "', '" . $longitude ."', '" . $latitude ."' ,'" .$images . "' ,'" .$snippet ."', '" . $hashtags ."','" . $tag_label ."')";

$query = "INSERT INTO `items_in_itinerary`(`id`,`activity_id`,`itinerary_id`,`timestamp`) VALUES 
('" . $id . "', " . $activity_id . ", '" . $itinerary_id . "','". $timestamp."')";

$query = "INSERT INTO `itineraries`(`id`,`itinerary_name`,`activity_id_list`,`timestamp`) VALUES 
('" . $id . "', " . $itinerary_name . ", '" . $activity_id_list . "', '" . $timestamp . "')";

$query = "INSERT INTO `users`(`id`,`first_name`,`last_name`,`profile_picture`,`gallery_pictures`,`email`,`facebook_id`,`itinerary_id_list`) VALUES 
('" . $id . "', " . $first_name . ", '" . $last_name . "')";


if ($id !== "" && $name !== "" && $date_queried !== "") {
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $new_id = mysqli_insert_id($conn);
        $output['success'] = true;
        $output['new_id'] = $new_id;

        print_r(json_encode($output));
    } else {
        echo 'ERROR!';
    }
}
?>