<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$sql1 = "select * from main";
$sql2 = "select * from comment";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$r = array();
$R = array();
foreach ($result1 as $row) {
    $r[] = $row;
}
foreach($result2 as $row){
    $R[] = $row;
}
echo json_encode(array(
    "code" => 200,
    "msg" => "ok",
    "data1" => $r,
    "date2" => $R
));
?>
