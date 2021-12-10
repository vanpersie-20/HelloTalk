<?php
session_start();
$conn = new mysqli('127.0.0.1','root','336699','weibo');
if(isset($_POST['submit'])) {
    if (isset($_POST['reply'])) {
        $details = $_POST['details'];
        $uid = $_POST['id'];
        $query = "insert into comment(whoComment, whoCommented, details) values ('{$_SESSION['name']}','$uid',$details)";
        echo json_encode(array(
            'msg' => '评论成功',
        ));
    }
}