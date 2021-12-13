<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
if(isset($_POST['submit'])){
    $sql1 = "select username from user where username = ?";
    $sql2 = "select password from user where password = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt2 = $conn->prepare($sql2);
    $stmt1->bind_param("s", $username);
    $stmt2->bind_param("s",$password);
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $stmt1->execute();
    $stmt2->execute();
    $result1 = $stmt1->get_result();
    $result2 = $stmt2->get_result();
    if($result1->num_rows && $result2->num_rows){
        echo json_encode(array(
            "code" => "100",
            "msg" => "ok",
        ));
    }elseif ($result1->num_rows && !$result2->num_rows){
        echo json_encode(array(
            "code" => "101",
            "msg" => "pass worse",
        ));
    }else{
        echo json_encode(array(
            "code" => "102",
            "msg" =>"no user",
        ));
    }
}