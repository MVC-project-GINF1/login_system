<?php
session_start();
include_once 'connection.php';
$id=$_SESSION['id'];
if(!empty($_POST['nom'])){
    $nom=$_POST['nom'];
    $sql ="UPDATE eleves SET nom = '$nom' WHERE ID_eleve = '$id'";
$result = mysqli_query ($conn,$sql) ;
}
if(!empty($_POST['prenom'])){
    $nom=$_POST['prenom'];
    $sql ="UPDATE eleves SET Prenom = '$nom' WHERE ID_eleve = '$id'";
$result = mysqli_query ($conn,$sql) ;
}

if(!empty($_POST['cne'])){
    $nom=$_POST['cne'];
    $sql ="UPDATE eleves SET CNE = '$nom'WHERE ID_eleve = '$id'";
$result = mysqli_query ($conn,$sql) ;
}

if(!empty($_POST['adresse'])){
    $nom=$_POST['adresse'];
    $sql ="UPDATE eleves SET Adresse = '$nom' WHERE ID_eleve = '$id'";
$result = mysqli_query ($conn,$sql) ;
}

if(!empty($_POST['ville'])){
    $nom=$_POST['ville'];
    $sql ="UPDATE eleves SET Ville = '$nom' WHERE ID_eleve = '$id'";
$result = mysqli_query ($conn,$sql) ;
}

if(!empty($_POST['email'])){
    $nom=$_POST['email'];
    $sql ="UPDATE eleves SET email = '$nom' WHERE ID_eleve = '$id'";
$result = mysqli_query ($conn,$sql) ;
}

if(!empty($_POST['pass'])){
    $nom=$_POST['pass'];
    $sql ="UPDATE compte SET passwrd = '$nom' WHERE ID = '$id'";
$result = mysqli_query ($conn,$sql) ;
}

if(!empty($_POST['user'])){
    $user_name=$_POST['user'];
    $sql ="UPDATE comptes SET user = '$user_name' WHERE ID = '$id'";
    $result = mysqli_query ($conn,$sql);

    // $rqst="SELECT Photo FROM eleves where ID_eleve = '".$id."' ";
    // $rst=mysqli_query($conn,$rqst);
    // $row = mysqli_fetch_assoc($rst);

    // $ph=$row['photo'];
    // $photoex=explode('.',$row['photo']);
    // $file_ext = strtolower(end($photoex));
    // $photo="./photo/".$user_name.".".$file_ext.'.';
    // rename($ph,$photo);
    // $sql ="UPDATE eleves SET Photo = '$photo' WHERE ID_eleve = '$id'";
    // $result = mysqli_query ($conn,$sql)  ;
}
// else{
//   $user_name=$_SESSION['user'];
// }

if(!empty($_FILES['photo']['name'])){
    $img_name=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    // $photoex=explode('.',$img_name);
    // $file_ext = strtolower(end($photoex));
    $photo="./photo/".$img_name;
    move_uploaded_file($tmp_name,$photo);
    $sql ="UPDATE eleves SET Photo = '$photo' WHERE ID_eleve = '$id'";
    $result = mysqli_query ($conn,$sql) ;
}
header("location:tablau.php");
?>