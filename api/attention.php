<?php
session_start();
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$sql = "select whoFollowed from weibo.follow where whoFollow = '{$_SESSION['name']}'";
$result = $conn->query($sql);
$r = array();
if (isset($_POST[''])) {
    foreach ($result as $row) {
        $r[] = $row;
    }
    echo json_encode(array(
        "date" => $r
    ));
}
