<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$sql1="select * from weibo.user";
$result1=$conn->query($sql1);
$all=array();
foreach ($result1 as $row){
    $all[]=$row;
}
echo json_encode(array(
    "userall"=>$all,
    "number"=>sizeof($all),
))
?>

