<?php
if(isset($_POST['username']) || isset ($_POST['password'])){
$ POST['username'];
$_POST['password'];
}
if(empty($_POST['username'])){
error username='enter username'}
if(empty($_POST['password'])){
    error password = 'enter password !'; 
}
else{
header ('location:index.php');}

include('index.php');
?>
