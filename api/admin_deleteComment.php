<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$sql1="select * from weibo.comment";
$result1=$conn->query($sql1);
$allcomment=array();
foreach ($result1 as $row){
    $allcomment[]=$row;
}
echo json_encode(array(
    "allcomment"=>$allcomment,
    "numberofcomment"=>sizeof($allcomment),
))
?>
