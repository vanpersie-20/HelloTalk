<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人注册</title>
    <style type="text/css">
        #title2{
            font-family: "黑体";
            position: absolute;
            color: black;
            font-size: 40px;
            left: 69%;
            top: 20%;
        }
        body {
            font-family: "Microsoft Yahei"
        }
        label,input{
            width:300px;
        }

        input#submit {
            width: 310px;
            background-color: coral;
            color: #fff;
            position: relative;
            left: 12%;
            border-radius: 20px;
            padding: 10px 20px;
            margin-top:10px;
            cursor: pointer;
        }
        form{
            position: absolute;
            top: 30%;
            left: 60%;
            width: 40%;
            height: 450px;
            display: flex;
            flex-direction: column;
            filter: alpha(opacity=60);
            -moz-opacity: 0.8;
            opacity: 0.8;
        }
        div{
        }
        input{
            border:1px solid #888;
            padding: 7px;
        }

        p {
            font-family: "黑体";
            font-size: .8rem;
            color:red;
            margin:0;
            display: inline-block;

        }
        .raduis{

            border-radius: 20px;
        }
    </style>
</head>
<body background="image/p2.jpg" style="background-size: 100%">
<div id="title2">个人注册
</div>
<form action="formvalidate.php" method="post" id="form" >
    <div>
        <label for="name">用&nbsp;&nbsp;户&nbsp;&nbsp;名</label>
        <input type="text" id="name" name="Name" class="raduis">
        <p id="name_p">请输入用户名，长度为2-16个字符!</p>
    </div>
    <br>
    <div>
        <label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
        <input type="password" id="password" name="Pass"class="raduis">
        <p id='password_p'>请输入密码!</p>
    </div>
    <br>
    <div>
        <label for="password_confirm">密码确认</label>
        <input type="password" id="password_confirm"class="raduis"  >
        <p id="password_confirm_p">请再次输入相同的密码!</p>
    </div>
    <br>
    <div>
        <label for="email">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
        <input type="text" id="email" name="Email" class="raduis" >
        <p id="email_p">请输入邮箱!</p>
    </div>
    <br>
    <div>
        <label for="phone_number">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机</label>
        <input type="text" id="phone_number" name="Telnumber" class="raduis" >
        <p id="phone_number_p">请输入手机号码!</p>
        <input type="submit" id="submit" value="注册" style="size: 30px">
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
    for(var i=0,j=document.getElementsByTagName("input");i<j.length;i++){
        j[i].onblur=function(){
            validateName();
            validatePassword();
            validateConPassword();
            validateEmail();
            validatePhone();
        }
    }
    var validateName = function() {
        if (name_info.value == "") {
            name_p.innerHTML = "请输入用户名，长度为2-16个字符";
            name_p.style.color = "#f00";
            name_info.style.border = "1px solid #888";
            return false;
        } else if (name_info.value.length < 2 || name_info.value.length > 16) { //验证长度是否符合标准
            name_p.innerHTML = "长度只能为为2-16个字符";
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
    var validatePassword = function(){
        if(password_info.value!=""){
            password_p.innerHTML = "密码可用";
            password_p.style.color = "#0f0";
            password_info.style.border = "2px solid #0f0"
            return true;
        }else{
            password_p.innerHTML = "请输入密码";
            password_p.style.color = "#f00";
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
            password_confirm_p.style.color = "#f00";
            password_confirm_info.style.border = "1px solid #888";
            return false;
        }
    }
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
            email_p.style.color = "#f00";
            email_info.style.border = "1px solid #888";
            return false;
        }
    }
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
            phone_p.style.color = "#f00";
            phone_info.style.border = "1px solid #888";
            return false;
        }
    }
    var validateAll = function (e){
        if(validateName()&&validatePassword()&&validateEmail()&&validatePhone()){
            alert("注册成功！")
        }else{
            alert("注册失败，请正确填写。");
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
</body>
</html>