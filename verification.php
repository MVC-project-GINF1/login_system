<?php
session_start();
include_once('connection.php');
if(isset($_POST['enter'])){
    $user = $_POST['user_name'];
    $pass = $_POST['password'];
}
   
    $result = mysqli_query($conn,"SELECT ID FROM comptes where user='".$user."' and passwd='".$pass."'" );
    $nblignes = mysqli_num_rows($result);


    if($nblignes){
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
        
        $row = mysqli_fetch_assoc($result);
        $id=$row['ID'];
        $_SESSION['id']=$id;

        $res = mysqli_query($conn,"SELECT * FROM eleves where ID_eleve='".$row['ID']."'");
        $row = mysqli_fetch_assoc($res);
        echo "Bienvenue ".$row['user'];
        header('location:tablau.php');
        exit();
    }
    else{
        echo 'user name ou mot de passe eronée';
        echo "<a href=\"home.php\">Try again</a>";
    }
?>