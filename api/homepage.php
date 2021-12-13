<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$sql = "select count(*) from main";
$sql2 = "select * from main";
$result = $conn->query($sql2);
$r = array();
foreach ($result as $row) {
    $r[] = $row;
}
echo json_encode(array(
    "code" => 200,
    "msg" => "ok",
    "data" => $r,
));
?>
