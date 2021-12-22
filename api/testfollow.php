<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
$id=$_REQUEST["commentid"];
$sql1="select whoFollowed from weibo.follow where whoFollow=$id";
$result1=$conn->query($sql1);
$array=array();
foreach ($result1 as $row){
    $array[]=$row;
}
$id=$_REQUEST["commentid"];
$sql1="select id,username from weibo.user where id!=$id";
$result2=$conn->query($sql1);
$User=array();
foreach($result2 as $row){
    $User[]=$row;
}
echo json_encode(array(
    "userfollowed"=>$array,
        "userfollowednumber"=>sizeof($array),
    "usernumber"=>sizeof($User),
        "userinfo"=>$User,
        )
)
?>