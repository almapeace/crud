<?php
include_once 'config.php';
if(isset($_POST['submit'])){
    $fid= $_POST['fid'];
    $memo= $_POST['memo'];
    
    $db->query("INSERT INTO memo (fid, memo) VALUES ($fid, '$memo')");
    header("location:memo.php?fid=".$fid);
  
}
?>