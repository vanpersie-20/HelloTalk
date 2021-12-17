<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="stsatic/jquery-3.5.1.js">
    </script>
</head>
<style type="text/css">
    body{
       background: linear-gradient(35deg,#CCFFFF,#FFCCCC);
        z-index:0;
        overflow: scroll;
    }

    div{
        display: block;
        z-index: 1;

    }
    .content{
        width:600px;
        height: 100000px;
        position: absolute;
        left: 30%;
        top: 10%;
    }
    .main{
        min-height: 100%;
    }
    .top{
        position: fixed;
        left: 40%;
    }
.denglubutton{
    border: none;
    background: coral;
    color: white;
    padding: 5px 10px;
    font-size: 20px;
    cursor: pointer;
    height: 50px;
    width: 90px;
}
.denglu{
    position: fixed;
    right: 1%;
    top: 1%;
}
.wenben{

}
.libutton{
    border: none;
    background: burlywood;
    color: white;
    padding: 5px 10px;
    font-size: 20px;
    border-radius: 10px;
    cursor: pointer;
    height: 50px;
    width: 90px;

}
.textdiv{
    border: 1px solid black;
    display: flex;
    border-radius: 20px;
    width: 600px;
    height: 200px;
}
.list{
    position: fixed;
    left: 1%;
    top: 30%;

}
.text{
    width: 300px;
    height:150px ;
    border-radius: 10px;
}
#sumbit1{
    position: relative;
    left: 32%;
    color: red;
}
.div3{
    position: fixed;
    right:0px;
    top: 30%;
}
footer{
    display: block;
}
.pinglun{

}
</style>
<body class="back0" onload="windowopen()">
<div class="top">
    <h1 class="wenben">欢迎来到HELLOTALK</h1>
</div>
<div class="content" id="content">
</div>
<?php
session_start();
if (isset($_SESSION["user"])){
    echo
'
<div class="div3">
    <form method="post">
        <textarea class="text" id="text1"></textarea><br>
        <input type="button" value="发表" class="libutton" id="sumbit1" name="text" onclick="addmain()">
    </form>
</div>
<div class="list">
   <ul>
       <li><a href="personal.html" target="_blank"><input type="button" value="个人主页" class="libutton" name="personal"></a></li>
   </ul>
</div>
<div class="tuichu">
<input type="button" value="退出登录" name="tuichu" id="tuichu1" onclick="tuichu()">
</div>
';}
else{
    echo '<div class="denglu">
    <a href="denglu.php" target="_blank"><input type="button" value="登录" class="denglubutton" name="submit"></a>
    <a href="zhuce.php" target="_blank"><input type="button" value="注册" class="denglubutton" name="register"></a>
</div>';}
?>
</body>
<script type="text/javascript">
    function windowopen(){
        $.ajax({
            type:"GET",
            url:"api/homepage.php",
            dataType:"json",
            success:function (data){
                for (var i=0;i<data.data4;i++){
                    var addhtml5='<article class="textdiv"><p id="text-' + i.toString() +'">'+data.data3[i].username+":"+data.data3[i].content+'</p></article><footer><input type="button"value="评论" class="pinglun"></footer>'
                    $("#content").append(addhtml5);
                }
            }
        })
    }
    function addmain(){
        $.ajax({
            type: "POST",
            url: "api/addmain.php?writer=<?php
                if (isset($_SESSION["id"])) {
                    echo $_SESSION["id"];
                }
                ?>&content=" + $("#text1").val(),
            success(data) {
            }
        })
        $.ajax({
            type:"GET",
            url:"api/homepage.php",
            dataType:"json",
            success:function (data){
                console.log(data);
            }
        })
        var addhtml5='<article class="textdiv"></article><footer><input type="button"value="评论" class="pinglun"></footer>'
        $("#content").append(addhtml5);
    }
    function tuichu() {
        $.ajax({
            type: "Get",
            url: "api/tuichu.php",
            success:function (){
                alert("退出成功");
                window.location.reload();
            }
        })
    }

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
                 height=document.getElementById("content1").style.height;
                document.getElementById("content1").style.height=height+10000;
            }
        });
    });
</script>
</html>