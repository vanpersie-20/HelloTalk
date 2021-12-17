<?php
session_start();
if(isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
    if (isset($_POST['sub'])) {
        $content = $_POST['content'];
        if ($content == null) {
            echo json_encode(array(
                'code' => 206,
                'msg' => '信息不能为空',
            ));
        } else {
            $query = "insert into weibo.main( writer, content )values ('{$_SESSION['name']}','$content')";
            $conn->query($query);
        }
    }else{
        echo json_encode(array(
            'code' => 105,
            'msg' => 'not denglu'
        ));
    }
}