<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$sql1="select * from weibo.main";
$result1=$conn->query($sql1);
$alluser=array();
foreach ($result1 as $row){
    $alluser[]=$row;
}
echo json_encode(array(
    "alluser"=>$alluser,
    "numberofalluser"=>sizeof($alluser),
))
?>
