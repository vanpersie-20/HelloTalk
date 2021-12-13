<?php
session_start();
if(isset($_POST['submit'])){
    $conn = new mysqli('127.0.0.1','root','336699','weibo');
    if(isset($_POST['guanzhu'])){
        $wfd = $_POST['wfd']; //从前端获得选择关注的人的名字
        $query = "insert into follow (whoFollow, whoFollowed) VALUES ('{$_SESSION['name']}','$wfd')";
    }
}
