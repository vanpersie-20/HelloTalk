<?php
$conn = new mysqli('localhost','root','peng353001','weibo');
if(isset($_POST['submit'])) {
    $sql1 = "select username from user where username = ? AND password = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ss", $username, $password);
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    if ($result1->num_rows) {
        echo json_encode(array(
        ));
    } elseif (!$result1->num_rows) {
        echo json_encode(array(
            "code" => "101",
            "msg" => "pass worse",
        ));
    } else {
        echo json_encode(array(
            "code" => "102",
            "msg" => "no user",
        ));
    }
    session_start();
    if ($result1->num_rows) {
        $sql2="select id from weibo.user where username='$username'";
        $id=$conn->query($sql2)->fetch_assoc()['id'];
        $_SESSION["user"] = $username;
        $_SESSION["id"]=$id;
        header("main.php");
        echo "登录成功";
    }else
        echo "用户名或密码错误";
}
?>