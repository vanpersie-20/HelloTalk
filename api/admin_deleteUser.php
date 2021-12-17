<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');

if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    $query = "delete from weibo.user where username='$user_id'";
}

