<?php
/* session, connect data, yada yada*/

//set the default access token from the session
$fb -> setDefaultAccessToken($_SESSION['EAACEdEose0cBAMbViXeS9nW49coF7MpxoisKyPgLYyilMZCepsRQbWHIiS7rFqZCx8o6LbSzAsBuIZASZBLSZCZBEKoKZBI5hpY9Ay2srCOu3g1SWAigljqdteOxZC1gzc5fXJfMlZCinSlPErRegWWYZAkVDh1TVOKfHp7IkICjxJ4JkRuqUALAo8RyZAFTNnah8oZD']);


$res = $fb-> get(
    'me?fields=id,name,birthday,gender,email,age_range,about,photos.limit(3){picture}'
);

//--
//{
//    "id": "10153914898093262",
//  "name": "Jinwoo Cho",
//  "birthday": "04/08/1992",
//  "gender": "male",
//  "email": "jojinwoogod@gmail.com",
//  "age_range": {
//    "min": 21
//  },
//  "about": "Jinwoo Cho
//
//조진우
//
//趙鎭佑
//
//1992년 04월 08일",
//  "photos": {
//    "data": [
//      {
//          "picture": "https://scontent.xx.fbcdn.net/v/t1.0-0/p130x130/11960249_911726455540013_4610220957965836396_n.jpg?oh=aff8b5de1364228e32c46d6b066f3b3c&oe=59D32D4D",
//        "id": "911726455540013"
//      },
//      {
//          "picture": "https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/10374063_671317889602259_5962733901047188981_n.jpg?oh=05131176028f901da598e7584a8e43aa&oe=59CC6E92",
//        "id": "671317889602259"
//      },
//      {
//          "picture": "https://scontent.xx.fbcdn.net/v/t1.0-0/s130x130/1013474_10153781261130392_1647424516_n.jpg?oh=9b0f8476326cd0cffa0af31ff142e531&oe=59E898AD",
//        "id": "10153781261130392"
//      }
//    ],
//    "paging": {
//        "cursors": {
//            "before": "T1RFeE56STJORFUxTlRRd01ERXpPakUwTkRFd016YzRPVGc2TXprME1EZAzVOalF3TmpRM09ETTIZD",
//        "after": "TVRBeE5UTTNPREV5TmpFeE16QXpPVEk2TVRNNU1qQTVORFV5Tmpvek9UUXdPRGsyTkRBMk5EYzRNelk9"
//      },
//      "next": "https://graph.facebook.com/v2.9/10153914898093262/photos?access_token=EAACEdEose0cBAMbViXeS9nW49coF7MpxoisKyPgLYyilMZCepsRQbWHIiS7rFqZCx8o6LbSzAsBuIZASZBLSZCZBEKoKZBI5hpY9Ay2srCOu3g1SWAigljqdteOxZC1gzc5fXJfMlZCinSlPErRegWWYZAkVDh1TVOKfHp7IkICjxJ4JkRuqUALAo8RyZAFTNnah8oZD&pretty=0&fields=picture&limit=3&after=TVRBeE5UTTNPREV5TmpFeE16QXpPVEk2TVRNNU1qQTVORFV5Tmpvek9UUXdPRGsyTkRBMk5EYzRNelk9"
//    }
//  }
//}

//make our data request to facebook
$node = $res ->getGraphObject();
$nodeData = $res -> getDecodedBody();
//get the graph object for later use

//or decode it into an associative array for later use

//then iterate through the data and do with it what you will!
?>