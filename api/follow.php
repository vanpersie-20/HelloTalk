<?php
$conn = new mysqli('localhost', 'root', 'peng353001', 'weibo');
$id=$_REQUEST["userid"];
$sql1="select id,username from weibo.user where id!=$id";
$result1=$conn->query($sql1);
$AllUser=array();
foreach($result1 as $row){
    $AllUser[]=$row;
}
echo json_encode(array(
  "userinfo"=>$AllUser,
    "usernumber"=>sizeof($AllUser),
    ))
?>