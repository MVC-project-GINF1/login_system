<?php
extract($_POST);
include_once("connection.php");
$user_name=$_POST['user'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cne=$_POST['cne'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$email=$_POST['email'];
$pass=$_POST['pass'];

        


$requete = "SELECT*FROM comptes where user = '".$user_name."' ";
$result = mysqli_query($conn,$requete);

if(mysqli_num_rows($result))
{
    echo "user name Already Exists"; 
    echo "<p><a href=\"signup.php\">signup</a></p>";
	exit();
}
else{
    
    $img_name=$_FILES['photo']['name'];
    $img_size=$_FILES['photo']['size'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $error=$_FILES['photo']['error'];
    // $photoex=explode('.',$img_name);
    // $file_ext = strtolower(end($photoex));
    $photo="./photo/".$img_name;
    $query="INSERT INTO eleves(Nom,Prenom,CNE,Adresse,Ville,email,photo) VALUES ('$nom','$prenom','$cne','$adresse','$ville','$email','$photo');";
    $sql1=mysqli_query($conn,$query)or die("Could Not Perform the Query");


}
if($sql1)
{      


        if($error===0){
                // rename($photo,"./photo/".$cne.".".$file_ext);
                move_uploaded_file($tmp_name,$photo);
                $requete = "SELECT ID_eleve FROM eleves where CNE = '".$cne."' ";
                $result = mysqli_query($conn,$requete);
                $row= mysqli_fetch_assoc($result);
                $id= $row['ID_eleve'];
                $sql = "INSERT INTO comptes(ID,user,passwd) VALUES ('$id','$user_name' ,'$pass' );";
                $result2 = mysqli_query ($conn,$sql) ;
                echo "<center><h1>enregistrement reussi</h1>
                <p>vous êtes enregistré sous le nom user: 
                <br>
                <span>".$user_name."</span>
                
                </p> 
                <p><a href=\"home.php\">login</a></p>
                </center>";
            }
        
        else{
            $er='unkown error eccurred';
            header("Location: home.php?error=$er");
        }
}
else{
   header("location: home.php");

}
