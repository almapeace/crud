<?php
include_once 'config.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $db->query("INSERT INTO friends (name, phone, birthday) VALUES ('$name', '$phone', '$birthday') ");
    header("location:index.php");
    echo "Name:$name Phone:$phone Birthday:$birthday";
}else{
    echo "error submitting form";
}

?>