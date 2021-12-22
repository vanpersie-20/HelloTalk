<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$id=$_REQUEST["userid"];
$sql1="select main.id,username,content from weibo.main,weibo.user where weibo.main.writer=$id and weibo.user.id=$id";
$sql2="select comment.id,username,content from weibo.comment,weibo.user where weibo.comment.whoComment=$id and weibo.user.id=$id";
$sql3="select id,content from weibo.comment where whoCommented=$id";
$result1=$conn->query($sql1);
$result2=$conn->query($sql2);
$result3=$conn->query($sql3);
$mymain = array();
$mycomment=array();
$mycommented=array();
foreach ($result1 as $row) {
    $mymain[] = $row;
}
foreach ($result2 as $row){
    $mycomment[]=$row;
}
foreach ($result3 as $row){
    $mycommented[]=$row;
}
echo json_encode(array(
    "mymain"=>$mymain,
    "mymainNumber"=>sizeof($mymain),
    "mycomment"=>$mycomment,
    "mycommentNumber"=>sizeof($mycomment),
    "mycommented"=>$mycommented,
    "mycommentedNumber"=>sizeof($mycommented),
))
?>