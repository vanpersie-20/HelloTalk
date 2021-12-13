<?php
session_start();
$conn = new mysqli('127.0.0.1','root','336699','weibo');
$sql = "select whoFollow from follow where whoFollowed='{$_SESSION['name']}'";
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
