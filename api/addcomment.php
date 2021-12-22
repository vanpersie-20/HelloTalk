<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
var_dump($_REQUEST);
$whoComment=$_REQUEST["whoComment"];
$content=$_REQUEST["content"];
$mainid=$_REQUEST["mainid"];
$mainid=(int)$mainid;
$sql="select main.writer from weibo.main where main.id=$mainid";
$result2=$conn->query($sql)->fetch_row();
$sql1="insert into weibo.comment (WHOCOMMENT, WHOCOMMENTED, CONTENT, MAINID)values('$whoComment','$result2[0]','$content','$mainid')";
$conn->query($sql1);
?>