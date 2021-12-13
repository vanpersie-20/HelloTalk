<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HELLO TALK</title>
    <style type="text/css">
        #title1{
            font-family: "黑体";
            position: absolute;
            color: black;
            font-size: 60px;
            text-align-last: center;
            left: 42%;
            top: 20%;
        }
        body {
            font-family: "Microsoft Yahei"
        }
        label{
            font-family: "黑体";
            display:block;
            width:300px;
        }
        .denglu {
            border: none;
            background-color: aqua;
            color: #fff;
            border-radius: 10px;
            padding: 5px 10px;
            font-size: 20px;
            cursor: pointer;
            height: 50px;
            width: 90px;
        }
        form{
            position: absolute;
            top: 30%;
            left: 32%;
            width: 40%;
            height: 450px;
            display: flex;
            flex-direction: column;
            background-color: #33495e;
            filter: alpha(opacity=60);
            -moz-opacity: 0.8;
            opacity: 0.8;
        }
        #name{
            font-size: 15px;
            text-align: left;
            border-radius: 20px;
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
        .php{
            color: black;
        }
        .lol{
            color: red;
        }
        .pass{
            font-size: 15px;
            text-align: left;
            border-radius: 20px;

        }
        .wel{
            position: relative;
            left: 33%;
            font-size: 50px;
            font-family: "黑体";
        }
        .zhuce{
            border: none;
            background-color: aqua;
            color: #fff;
            border-radius: 10px;
            padding: 5px 10px;
            font-size: 20px;
            cursor: pointer;
            height: 50px;
            width: 90px;

        }
        .div{
         display: block;
        }

    </style>
</head>
<body background="image/p1.jpg" style="background-size: 100%">
<h2 class="lol"></h2>
<div id="title1" ">
HELLO TALK
</div>
<form method="post" id="form" action="zhuce.php">
    <h1 class="wel">Welcome!</h1><br>
    <div>
        <label for="name"></label>
        <input type="text" id="name" name='name' placeholder="请输入你的用户名">
    </div>
    <div>
        <label for="password"></label>
        <input type="password" id="password" name='pass' placeholder="请输入密码"  class="pass">
    </div>
    <div>
        <label for="password_confirm"></label>
        <input type="password" id="password_confirm" name='conpass'placeholder="请再次输入密码" class="pass">
    </div>
    <div class="div">
    <input type="submit" id="submit" value="登录" name="submit" class="denglu">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<a href="zhuce.php" target="_blank"><input type="button" value="注册" class="zhuce"></a>
    </div>
</form>
</body>
</html>
