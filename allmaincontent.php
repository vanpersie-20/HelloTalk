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
<div id="followdiv"><h1>所有微博:</h1></div>
</body>
<script type="text/javascript">
    function windowopen() {
        $.ajax({
            type: "GET",
            url: "api/admin_deleteContent.php",
            success: function (data) {
                data=jQuery.parseJSON(data);
                    for (var i = 0; i < data.numberofalluser; i++) {
                    var text = '<p>' + data.alluser[i].id + ":" + data.alluser[i].content + '</p><input type="hidden" class="mainid" value="' + data.alluser[i].id + '"><input type="button" value="删除" class="followbtn" id="btn-' + data.alluser[i].id + '" onclick="admindelete(this)">';
                    $("#followdiv").append(text);
                }
            }
        })
    }
    function  admindelete(e){
        $.ajax({
            type: "GET",
            url: "api/admin_content_delete.php?textid="+$(e).prev().val(),
            success:function (){
                window.location.reload();
            }
        })
    }
</script>
</html>
