<?php
session_start();
if(isset($_POST['submit'])){
    $conn = new mysqli("localhost","root","peng353001","weibo");
    if(isset($_POST['delete_content'])){
        $cont = $_POST['cont'];
        $query1 = "delete from weibo.main where writer='{$_SESSION['name']}' and content='$cont'";

    }
    if(isset($_POST['delete_comment'])){
        $del = $_POST['del'];
        $wcd = $_POST['wcd'];
        $query2 = "delete from weibo.comment where whoComment='{$_SESSION['name']}' and whoCommented='$wcd' and details='$del'";

    }
}