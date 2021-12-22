<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script src="stsatic/jquery-3.5.1.js"> </script>
<style>
 .myfollow{
     background: linear-gradient(35deg,#CCFFFF,#FFCCCC);
 }
</style>
<body class="myfollow" onload="windowopen()">
<div id="followdiv"><h1>所有用户:</h1></div>
</body>
<script type="text/javascript">
    function windowopen() {
        $.ajax(
            {   type: "GET",
                url: "api/follow.php?userid="+<?php
                session_start();
                if (isset($_SESSION["id"])) {
                    echo $_SESSION["id"];
                }?>,
                success:function(data){
                    console.log(data);
                    data=jQuery.parseJSON(data);
                    for (var i = 0; i < data.usernumber; i++) {
                        var text = '<p>' + data.userinfo[i].id + ":" + data.userinfo[i].username + '</p><input type="hidden" class="mainid" value="' + data.userinfo[i].id + '"><input type="button" value="关注" class="followbtn" id="btn-'+data.userinfo[i].id+'" onclick="guangzhu(this)">'
                        $("#followdiv").append(text);
                    }
                }
            }
        )
        $.ajax({
            type:"GET",
            url:"api/testfollow.php?commentid="+<?php
            if (isset($_SESSION["id"])) {
                echo $_SESSION["id"];
            }?>,
            success:function (data){
                data=jQuery.parseJSON(data);
              for (var i=0;i<data.usernumber;i++){
                  for (var j=0;j<data.userfollowednumber;j++){
                     if (data.userinfo[i].id===data.userfollowed[j].whoFollowed){
                         $("#btn-"+data.userinfo[i].id).attr("disabled",true);
                         $("#btn-"+data.userinfo[i].id).val("已关注");
                     }
                  }
              }
            }
        })
    }
    function guangzhu(e){
        $.ajax({
            type: "GET",
            url:"api/addfollow.php?whoFollow=<?php
                if (isset($_SESSION["id"])) {
                    echo $_SESSION["id"];
                }?>&whoFollowed="+$(e).prev().val(),
            success:function (){
                    window.location.reload();

            }
        })
    }
</script>
</html>