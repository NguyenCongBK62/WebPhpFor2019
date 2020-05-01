<?php
    $connect = mysqli_connect('us-cdbr-iron-east-01.cleardb.net', 'bc0106197c6002','fab4e9d0', 'heroku_337598ef392ba55');
    if($connect){
        mysqli_query($connect, 'SET NAMES "utf8"');
    }else{
        die('Ket noi that bai.');
    }
?>