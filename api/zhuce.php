<?php
$conn = new mysqli("localhost",'root','peng353001','weibo');
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $password = $_POST['Pass'];
    $email = $_POST['Email'];
    $phone = $_POST['Telnumber'];
    $sql = "select username from user where ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows){
        echo json_encode(array(
            "code" => "103",
            "msg" => "name repeat",
        ));
    }else{
        $query = "insert into user ( username, password, email, tel) values('$name','$password','$email','$phone')";
    }
}
