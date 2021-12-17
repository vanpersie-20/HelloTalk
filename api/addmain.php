<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
var_dump($_REQUEST);
$writer=$_REQUEST["writer"];
$content=$_REQUEST["content"];
$sql="insert into weibo.main (writer, content) values('$writer','$content')";
$conn->query($sql);
?>
