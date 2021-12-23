<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script src="stsatic/jquery-3.5.1.js">
</script>
<STYLE>
    .person{
        background: linear-gradient(35deg,#CCFFFF,#FFCCCC);
    }

    .button{
        border-radius: 15px;
        width: 100px;
        height: 50px;
    }
    .ul1{
        position: absolute;
        top: 40%;
        left: 0px;
    }
    .wenzi{
        font-family: 黑体;
        font-size: 30px;
    }
    .iframe1{
        position: absolute;
        right: 0px;
    }
    #iframe{
        width: 1000px;
        height: 500px;
    }
</STYLE>
<body class="person">
<a href="main.php"><input type="button" class="button1" value="返回首页"></a>
<h1 style="font-size: 30px">管理员界面</h1>
<div class="ul1">
    <ul>
        <li><input type="button" value="管理所有用户" class="button" id="wodeguangzhu" onclick="guangzhu()"></li>
        <li><input type="button" value="管理所有微博" class="button" id="wodeweibo" onclick="weibo()"></li>
        <li><input type="button" value="管理所有评论" class="button" id="wodecomment" onclick="comment()"></li>
    </ul>
</div>
<div class="iframe1">
    <iframe src="myfollow.php" id="iframe"></iframe>
</div>
</body>
<script type="text/javascript">
    var obj=document.getElementById("iframe");
    function guangzhu(){
        obj.setAttribute("src","alluser.php");
    }
    function weibo(){
        obj.setAttribute("src","allmaincontent.php");
    }
    function comment(){
        obj.setAttribute("src","allcomment.php");
    }
</script>
</html>
