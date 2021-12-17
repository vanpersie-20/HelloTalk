<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$sql1 = "select * from weibo.main";
$sql2 = "select * from weibo.comment";
$sql3="select main.id,  main.content, user.username from weibo.main, weibo.user where user.id = main.writer";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3=$conn->query($sql3);
$r = array();
$R = array();
$writer=array();
foreach ($result1 as $row) {
    $r[] = $row;
}
foreach($result2 as $row){
    $R[] = $row;
}
foreach ($result3 as $row){
    $writer[]=$row;
}
echo json_encode(array(
    "code" => 200,
    "msg" => "ok",
    "data1" => $r,
    "data2" => $R,
    "data3"=> $writer,
    "data4"=>sizeof($writer),
));
?>