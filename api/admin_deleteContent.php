<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
if (isset($_POST['delete_content'])) {
    $main_id = $_POST['main_id'];
    $query = "delete from weibo.main where id='$main_id'";
}
if (isset($_POST['delete_comment'])) {
    $comment_id = $_POST['comment_id'];
    $query = "delete from weibo.comment where id='$comment_id'";

}
