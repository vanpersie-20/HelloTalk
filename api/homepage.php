<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$sql1 = "select * from weibo.main";
$sql3="select main.id,  main.content, user.username from weibo.main, weibo.user where user.id = main.writer";
$sql4="select user.username,comment.content,comment.mainid from weibo.comment,weibo.user where user.id=comment.whoComment";
$result1 = $conn->query($sql1);
$result3=$conn->query($sql3);
$result4=$conn->query($sql4);
$r = array();
$writer=array();
$comment=array();
foreach ($result1 as $row) {
    $r[] = $row;
}
foreach ($result3 as $row){
    $writer[]=$row;
}
foreach ($result4 as $row){
    $comment[]=$row;
}
echo json_encode(array(
    "code" => 200,
    "msg" => "ok",
    "data1" => $r,
    "data3"=> $writer,
    "data4"=>sizeof($writer),
    "comment"=>$comment,
    "commentNumber"=>sizeof($comment),
));
?>