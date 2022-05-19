<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    <div>
    <form action="" method="POST">
        <h2>SUPPRIMER MON COMPTE</h2>
        <h4>Je conffirme de vouloir supprimer mon compte</h4>
        <input type="submit" name='enter' class="form-submit" value="Supprimer"> 
    
    </div>
    <?php
    session_start();
       include_once 'connection.php' ; 
       $id=$_SESSION['id'];
       if(isset($_POST['enter'])){
       $sql = "SELECT photo FROM eleves where ID_eleve = '$id'  ";
       $result=mysqli_query ($conn,$sql) ;
       $row=mysqli_fetch_assoc($result);
       $file="./photo/".$row['photo'];
       unlink($file);
       $sql ="DELETE FROM eleves WHERE ID_eleve = '$id'";
       mysqli_query ($conn,$sql) ;
       $sql ="DELETE FROM comptes WHERE ID = '$id'";
       mysqli_query ($conn,$sql) ;
       
       session_unset();
       header("Location: home.php");
       }
    ?>
</body>
</html>