<?php
session_start();
if(isset($_POST['submit'])){
    $conn = new mysqli('localhost','root','peng353001','weibo');
    if(isset($_POST['guanzhu'])){
        $wfd = $_POST['wfd']; //从前端获得选择关注的人的名字
        $query = "insert into weibo.follow (whoFollow, whoFollowed) VALUES ('{$_SESSION['name']}','$wfd')";
    $conn->query($query);
    }
}
