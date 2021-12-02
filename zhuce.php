<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>多个表单项的动态校验 </title>
    <style type="text/css">
        body {
            font-family: "Microsoft Yahei"
        }
        label,input{
            display:block;
            width:300px;
        }

        input#submit {
            border: none;
            background-color: #2F79BA;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top:10px;
            cursor: pointer;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        div{
            margin:5px auto;
            display: flex;
            flex-flow: inherit;
            width: 300px;
        }
        input{
            border:1px solid #888;
            padding: 7px;
        }

        p {
            font-size: .8rem;
            color: #BBBBBB;
            margin:0;
        }
    </style>
</head>
<body>
<form action="formvalidate.php" method="post" id="form">
    <div>
        <label for="name">名称</label>
        <input type="text" id="name" name="Name"/>
        <p id="name_p">必填，长度为4~16个字符</p>
    </div>
    <div>
        <label for="password">密码</label>
        <input type="password" id="password" name="Pass"/>
        <p id='password_p'>请输入密码</p>
    </div>
    <div>
        <label for="password_confirm">密码确认</label>
        <input type="password" id="password_confirm" />
        <p id="password_confirm_p">再次输入相同的密码</p>
    </div>
    <div>
        <label for="email">邮箱</label>
        <input type="text" id="email" name="Email"/>
        <p id="email_p">输入您的邮箱</p>
    </div>
    <div>
        <label for="phone_number">手机</label>
        <input type="text" id="phone_number" name="Telnumber"/>
        <p id="phone_number_p">输入您的手机号码</p>
        <input type="submit" id="submit" value="提交" />
    </div>
</form>

<script type="text/javascript">
    var name_info = document.getElementById('name');
    var password_info = document.getElementById('password');
    var password_confirm_info = document.getElementById('password_confirm');
    var email_info = document.getElementById('email');
    var phone_info = document.getElementById('phone_number')
    var name_p = document.getElementById('name_p');
    var password_p = document.getElementById('password_p');
    var password_confirm_p = document.getElementById('password_confirm_p');
    var email_p = document.getElementById('email_p');
    var phone_p = document.getElementById('phone_number_p')

    //获取焦点和失去焦点

    for(var i=0,j=document.getElementsByTagName("input");i<j.length;i++){
        j[i].onblur=function(){//表单失去焦点时，显示验证结果
            validateName();
            validatePassword();
            validateConPassword();
            validateEmail();
            validatePhone();
        }

    }


    //验证账号
    var validateName = function() {
        if (name_info.value == "") { //验证是否为空
            name_p.innerHTML = "必填，长度为4~16个字符";
            name_p.style.color = "#BBB";
            name_info.style.border = "1px solid #888";
            return false;
        } else if (name_info.value.length < 4 || name_info.value.length > 16) { //验证长度是否符合标准
            name_p.innerHTML = "长度只能为为4~16个字符";
            name_p.style.color = "#f00";
            name_info.style.border = "2px solid #f00";
            return false;
        } else {
            name_p.innerHTML = "名称格式正确";
            name_p.style.color = "#0f0";
            name_info.style.border = "2px solid #0f0";
            return true;
        }
    }
    //验证密码
    var validatePassword = function(){
        if(password_info.value!=""){
            password_p.innerHTML = "密码可用";
            password_p.style.color = "#0f0";
            password_info.style.border = "2px solid #0f0"
            return true;
        }else{
            password_p.innerHTML = "请输入密码";
            password_p.style.color = "#BBBBBB";
            password_info.style.border = "1px solid #888";
            return false;
        }
    }
    var validateConPassword = function(){
        if(password_confirm_info.value!=""){
            if(password_info.value === password_confirm_info.value){
                password_confirm_p.innerHTML = "密码输入一致";
                password_confirm_p.style.color = "#0f0";
                password_confirm_info.style.border = "2px solid #0f0";
                return true;
            }else{
                password_confirm_p.innerHTML = "密码输入不一致";
                password_confirm_p.style.color = "#f00";
                password_confirm_info.style.border = "2px solid #f00";
                return false;
            }
        }else{
            password_confirm_p.innerHTML = "再次输入相同的密码";
            password_confirm_p.style.color = "#bbb";
            password_confirm_info.style.border = "1px solid #888";
            return false;
        }
    }
    //验证邮箱
    var validateEmail = function(){
        if(email_info.value!=""){
            var filter = /^[a-z0-9]([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?$/;
            if(filter.test(email_info.value)){
                email_p.innerHTML = "邮箱格式正确";
                email_p.style.color = "#0f0";
                email_info.style.border = "2px solid #0f0";
                return true;
            }else{
                email_p.innerHTML = "邮箱格式错误";
                email_p.style.color = "#f00";
                email_info.style.border = "2px solid #f00";
                return false;
            }
        }else{
            email_p.innerHTML = "输入您的邮箱";
            email_p.style.color = "#BBB";
            email_info.style.border = "1px solid #888";
            return false;
        }
    }
    //验证手机号码
    var validatePhone = function(){
        if(phone_info.value != ""){
            var filter = /^1[3|4|5|8][0-9]\d{8}$/i;
            if(filter.test(phone_info.value)){
                phone_p.innerHTML = "手机格式正确";
                phone_p.style.color = "#0f0";
                phone_info.style.border = "2px solid #0f0";
                return true;
            }else{
                phone_p.innerHTML = "手机格式错误";
                phone_p.style.color = "#f00";
                phone_info.style.border = "2px solid #f00";
                return false;
            }
        }else{
            phone_p.innerHTML = "输入您的手机号码";
            phone_p.style.color = "#BBB";
            phone_info.style.border = "1px solid #888";
            return false;
        }
    }
    var validateAll = function (e){
        if(validateName()&&validatePassword()&&validateEmail()&&validatePhone()){
            alert("提交成功！")
        }else{
            alert("提交失败，请正确填写。");
            e.preventDefault();
            return false;
        }
    }
    subObj=document.getElementById("submit");
    if(subObj.addEventListener){
        subObj.addEventListener("click",validateAll,false)
    }else{
        subObj.attachEvent("onclick",validateAll)
    }
</script>
<?php
if (!isset($_POST['Name'])) {
    die();
}
//    var_dump($_POST);
$conn=mysqli_connect("localhost","root","peng353001","user");
$username=$_POST['Name'];
$pass=$_POST['Pass'];
$email=$_POST['Email'];
$Tel=$_POST['Telnumber'];
$query = "INSERT INTO weibouser value('$username' ,'$pass','$email','$Tel',)";
$conn->query($query);
?>
</body>
</html>