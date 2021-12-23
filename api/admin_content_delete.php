<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$id1=$_REQUEST["textid"];
$id2=$_REQUEST["whocommented"];
$sql1="delete from weibo.main where id=$id1";
$sql2="delete from weibo.comment where mainid=$id2";
$conn->query($sql1);
$conn->query($sql2);
?>