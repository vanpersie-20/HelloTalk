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
<div id="followdiv"><h1>我的所有微博:</h1></div>
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
                for (var i=0;i<data.mymainNumber;i++){
                    var text='<p>' + data.mymain[i].username + ":" + data.mymain[i].content + '</p><input type="hidden" class="mainid" value="' + data.mymain[i].id + '"><input type="button" value="删除" class="followbtn" id="btn-'+data.mymain[i].id+'" onclick="shangchumain(this)">'
                    $("#followdiv").append(text);
                }
            }
        })
    }
    function shangchumain(e){
        $.ajax({
            type: "GET",
            url: "api/deletemain.php?whocommented=<?php
            if (isset($_SESSION["id"])) {
                echo $_SESSION["id"];
            }?>&textid="+$(e).prev().val(),
            success:function (){
                window.location.reload();
            }
        })
    }
</script>
</html>