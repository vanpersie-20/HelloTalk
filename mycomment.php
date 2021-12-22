<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script src="stsatic/jquery-3.5.1.js"> </script>
<style>
    .mycontent{
        background: linear-gradient(35deg,#CCFFFF,#FFCCCC);
    }
</style>
<body class="mycontent" onload="windowopen()">
<div id="followdiv"><h1>我的所有评论:</h1></div>
</body>
<script type="text/javascript">
    function windowopen() {
        $.ajax({
            type:"GET",
            url:"api/weiboandpinglun.php?userid="+<?php
            session_start();
            if (isset($_SESSION["id"])) {
                echo $_SESSION["id"];
            }?>,
            success:function (data){
                data=jQuery.parseJSON(data);
                for (var i=0;i<data.mycommentNumber;i++){
                    var text='<p>' + data.mycomment[i].username + ":" + data.mycomment[i].content + '</p><input type="hidden" class="mainid" value="' + data.mycomment[i].id + '"><input type="button" value="删除" class="followbtn" id="btn-'+data.mycomment[i].id+'" onclick="shangchucomment(this)">'
                    $("#followdiv").append(text);
                }
            }
        })
    }
    function shangchucomment(e){
        $.ajax({
            type: "GET",
            url: "api/deletecomment.php?textid="+$(e).prev().val(),
            success:function (){
                window.location.reload();
            }
        })
    }
</script>
</html>