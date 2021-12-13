<?php
$conn = new mysqli('127.0.0.1', 'root', '336699', 'weibo');
if(isset($_POST['submit'])){
    if(isset($_POST['delete_content'])){
        $main_id = $_POST['main_id'];
        $query = "delete from main where id='$main_id'";
    }
    if(isset($_POST['delete_comment'])){
        $comment_id = $_POST['comment_id'];
        $query = "delete from comment where id='$comment_id'";

    }
}