<?php 
session_start();

if(isset($_POST['baj'])){
    if(isset($_SESSION['nb'])){
        $_SESSION['nb']++;
        $_SESSION['notes']=$_SESSION['notes'].$_POST['titre'].' : '.$_POST['com'].'*';
    }
    else{
        $_SESSION['nb']=1;
        $_SESSION['notes']=$_POST['titre'].' : '.$_POST['com'].'*';
    }
    include 'succesajout.php';
}
if(isset($_POST['baf'])){
    include 'affichage.php';
}
?>