<?php
$conn = new mysqli("localhost",'root','peng353001','weibo');
if(isset($_POST['register'])){
    $name = $_POST['Name'];
    $password = $_POST['Pass'];
    $email = $_POST['Email'];
    $phone = $_POST['Telnumber'];
    $sql = "select username from weibo.user where ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows){
        echo "用户名相同！";
    }else{
        $query = "insert into weibo.user ( username, password, email, tel) values('$name','$password','$email','$phone')";
        $conn->query($query);
        echo "注册成功！";
    }
}
?>
