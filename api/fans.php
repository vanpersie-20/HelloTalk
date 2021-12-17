<?php
session_start();
$conn = new mysqli('localhost','root','peng353001','weibo');
$sql = "select whoFollow from weibo.follow where whoFollowed='{$_SESSION['name']}'";
$result = $conn->query();
$r=array();
if(isset($_POST[''])){
    foreach($result as $row){
        $r[] = $row;
    }
    echo json_encode(array(
        "date" => $r
    ));
}
