<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_signup.css">

    <title>signup</title>
</head>

<body>
    <a href="home.php" class="home">HOME</a>
    <div class="text-box"><h1>Sign-up:</h1></div>
    <div class="container">
    <?php         session_start(); ?>
        <br>
        <form action="signupp.php" method="POST" enctype="multipart/form-data">
            <div class="r">
            <label>Nom:<tb></label>
            <input  required type="text" name="nom"></br>

            <label> Prenom:</label>
            <input  required type="text" name="prenom"><br>

            <label>User_name:</label>
            <input  required type="text" name="user"><br>

            <label>CNE:</label>
            <input  required type="text" name="cne"></br>

            <label>Adresse:</label>
            <input  required type="text" name="adresse"></br>

            <label>Ville:</label>
            <input  required type="text" name="ville"></br>

            <label>Email:</label>
            <input  required type="email" name="email"></br>

            <label>Password:</label>
            <input  required type="password" name="pass"></br></div>
            <div class="photo">
            <img type="image" alt="image" src="./photo/OIP.jpg" width="150px"   > </br><input   type="file" accept="image/png, image/jpeg" name="photo" required></br>
            <input  class="form-submit" type="submit" name="submit" value="save"></div>


        </form>
    </div>
    </div>
</body>

</html>