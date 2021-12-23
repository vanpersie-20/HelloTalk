<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$id=$_REQUEST["textid"];
$sql1="delete from weibo.user where id=$id";
$sql2="delete from weibo.main where writer=$id";
$sql3="delete from weibo.comment where whoComment=$id";
$sql4="delete from weibo.follow where whoFollow=$id";
$conn->query($sql1);
$conn->query($sql2);
$conn->query($sql3);
$conn->query($sql4);
?>