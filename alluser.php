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
        $.ajax({
            type: "GET",
            url: "api/admin_deleteUser.php",
            success: function (data) {
                data=jQuery.parseJSON(data);
                for (var i = 0; i < data.number; i++) {
                    var text = '<p>' + data.userall[i].id + ":" + data.userall[i].username + '</p><input type="hidden" class="mainid" value="' + data.userall[i].id + '"><input type="button" value="删除" class="followbtn" id="btn-' + data.userall[i].id + '" onclick="admindelete(this)">';
                    $("#followdiv").append(text);
                }
            }
        })
    }
    function  admindelete(e){
        $.ajax({
            type: "GET",
            url: "api/admin_user_delete.php?textid="+$(e).prev().val(),
            success:function (){
                window.location.reload();
            }
        })
    }
</script>
</html>
