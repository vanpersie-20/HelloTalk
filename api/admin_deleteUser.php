<?php
$conn = new mysqli('127.0.0.1','root','336699','weibo');
if(isset($_POST['submit'])){
    if(isset($_POST['delete_user'])){
        $user_id = $_POST['user_id'];
        $query = "delete from user where username='$user_id'";
    }
}
