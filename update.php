<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update_css.css">

    <title>UPDATE</title>
</head>

<body>
    <a href="home.php" class="home">HOME</a>
    <div class="text-box"><h1>Update:</h1></div>
    <div class="container">
    <?php         session_start(); ?>
        <br>
        <form action="updatee.php" method="POST" enctype="multipart/form-data">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="r">
            <label>Nouveau Nom:<tb></label>
            <input  type="text" name="nom"></br>

            <label>Nouveau Prenom:</label>
            <input  type="text" name="prenom"><br>

            <label>Nouveau User_name:</label>
            <input  type="text" name="user"><br>

            <label>Nouveau CNE:</label>
            <input  type="text" name="cne"></br>

            <label>Nouveau Adresse:</label>
            <input type="text" name="adresse"></br>

            <label>Nouveau Ville:</label>
            <input   type="text" name="ville"></br>

            <label>Nouveau Email:</label>
            <input  type="email" name="email"></br>

            <label>Nouveau Password:</label>
            <input  type="password" name="pass"></br>
            </div>
            <div class="photo">
            <img type="image" alt="image" src="./photo/OIP.jpg" width="150px"   > </br><input   type="file" accept="image/png, image/jpeg" name="photo" ></br>
            <input  class="form-submit" type="submit" name="submit" value="save"></div>


        </form>
        </form>
    </div>
    </div>
</body>

</html>