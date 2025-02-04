<?php 

include_once 'config.php';

if(isset($_GET['fid'])){
    $fid=$_GET['fid'];

$db->query("DELETE FROM friends WHERE fid= $fid");
header("location:index.php");

    //echo "trying to delete $fid";
}
?>