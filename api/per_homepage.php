<?php
session_start();
if(isset($_POST['personal'])){
    if(isset($_POST['submit'])){
        echo json_encode(array(
            'code' => 100,
            'msg' => 'ok',
            'date' => $_SESSION['name']
        ));
    }
    else{
        echo json_encode(array(
            'code' => 105,
            'msg' => 'not denglu'
        ));
    }
}
