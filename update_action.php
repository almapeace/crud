<?php
include_once 'config.php';
if(isset($_POST['submit'])){
    $fid = $_POST['fid'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $db->query("UPDATE friends SET name='$name', phone='$phone', birthday='$birthday' WHERE fid='$fid' ");
    header("location:index.php");
    // echo "Name:$name Phone:$phone Birthday:$birthday";
}else{
    echo "error submitting form";
}

?>