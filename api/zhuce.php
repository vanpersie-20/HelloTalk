<?php
$conn = new mysqli("localhost",'root','peng353001','weibo');
if(isset($_POST['register'])){
    $name = $_POST['Name'];
    $password = $_POST['Pass'];
    $email = $_POST['Email'];
    $phone = $_POST['Telnumber'];
    $sql = "select username from weibo.user";
    $result = $conn->query($sql);
    $user=array();
    foreach ($result as $row){
        $user[]=$row['username'];
    }
    for ($i=0;$i<sizeof($user);$i=$i+1){
    if($user[$i]==$name){
         echo "用户名已存在,请重新注册";
         break;
    }else {
        $query = "insert into weibo.user ( username, password, email, tel) values('$name','$password','$email','$phone')";
        $conn->query($query);
        echo "注册成功！";
        break;
    }    }
}
?>
<script type="text/javascript">
    function  open(){
        window.location.href="../main.php";
    }
    setTimeout(open,3000);
</script>
