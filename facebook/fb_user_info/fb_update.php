<?php
//include 'fb_update.php';


//$entityBody = file_get_contents('php://input');
$entityBody = file_get_contents('includes/dummy.json');
$dataMaster= json_decode($entityBody,true);

$url_id = $_GET['facebook_id'];
$checkmysql = "SELECT * FROM `users` WHERE facebook_id='$url_id'";
$result = ($checkmysql);



if(mysql_num_rows($result) >0){
    //found, keep on that id

}else{
    //not found create new id
    $query = "INSERT INTO `users`(`first_name`,`last_name`,`profile_picture`,`gallery_pictures`,`email`,`facebook_id`,`itinerary_id_list`) VALUES ('$first_name','$last_name','$profile_picture','$gallery_pictures','$email','$facebook_id','$itinerary_id_list')";
    //for now

    //keep on it
}

?>