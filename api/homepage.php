<?php
$conn = new mysqli('127.0.0.1','root','336699','weibo');
$sql = "select count(*) from main";

for($i = 0;$i<$sql;$i++){
    $sql2 = "select writer and content from main where id = $i";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();

    echo json_encode(array(
        "code" => 200,
        "msg" => "ok",
        "data" => $sql2,
    ));
}
?>
