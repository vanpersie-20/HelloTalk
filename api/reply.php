<?php
session_start();
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
if (isset($_POST['reply'])) {
    if (isset($_POST['submit'])) {
        $details = $_POST['details'];
        $wcd_id = $_POST['wcd_name'];
        $content_id = $_POST['content_id'];
        $query = "insert into weibo.comment(whoComment, whoCommented, details,mainid) values ('{$_SESSION['name']}','$wcd_id',$details,'$content_id')";
        echo json_encode(array(
            'msg' => '评论成功',
        ));
    } else {
        echo json_encode(array(
            'code' => 105,
            'msg' => 'not denglu'
        ));
    }
}