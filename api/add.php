<?php
session_start();
if(isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $conn = new mysqli('127.0.0.1', 'root', '336699', 'weibo');

    if (isset($_POST['sub'])) {
        $content = $_POST['content'];
        if ($content == null) {
            echo json_encode(array(
                'code' => 206,
                'msg' => '信息不能为空',
            ));
        } else {
            $query = "insert into main( writer, content )values ('{$_SESSION['name']}','$content')";
        }
    }else{
        echo json_encode(array(
            'code' => 105,
            'msg' => 'not denglu'
        ));
    }
}