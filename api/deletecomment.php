<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$id=$_REQUEST["textid"];
$sql1="delete from weibo.comment where id=$id";
$conn->query($sql1);
?>
