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
<h1>Welcome!</h1>
<H2>当前用户名:<?php session_start();
    if (isset($_SESSION["user"])) {
        echo $_SESSION["user"];
    }?></H2>
<?php
if (isset($_SESSION["user"])){
if ($_SESSION["user"]=="admin"){
    echo '<a href="admin.php"><input type="button" class="button1" value="管理员界面"></a>';
}
}
?>
<div class="ul1">
<ul>
    <li><input type="button" value="我的关注" class="button" id="wodeguangzhu" onclick="guangzhu()"></li>
    <li><input type="button" value="我的微博" class="button" id="wodeweibo" onclick="weibo()"></li>
    <li><input type="button" value="我的评论" class="button" id="wodecomment" onclick="comment()"></li>
</ul>
</div>
<div class="iframe1">
<iframe src="myfollow.php" id="iframe"></iframe>
</div>
</body>
<script type="text/javascript">
    var obj=document.getElementById("iframe");
    function guangzhu(){
      obj.setAttribute("src","myfollow.php");
    }
    function weibo(){
        obj.setAttribute("src","mycontent.php");
    }
    function comment(){
        obj.setAttribute("src","mycomment.php");
    }
</script>
</html>