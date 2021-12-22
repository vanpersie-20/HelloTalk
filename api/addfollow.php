<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$whoFollowed=$_REQUEST["whoFollowed"];
$whoFollow=$_REQUEST["whoFollow"];
$sql="insert into weibo.follow(whoFollow, whoFollowed) values ('$whoFollow','$whoFollowed')";
$conn->query($sql);
?>