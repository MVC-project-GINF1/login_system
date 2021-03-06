<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tbl.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;

            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <center><h1>LISTE DES INSCRITS</h1></center>
    
    <?php
    session_start();
    if(isset($_SESSION['pass'])&& isset($_SESSION['user'])){
    include_once 'connection.php';
    include_once ('header.php');

    $result = mysqli_query($conn,"SELECT * FROM eleves");
    $nblignes = mysqli_num_rows($result);

    echo "<table><thead>
 <tr>
 <th>ID</th>
 <th>Nom</th>
 <th>Prenom</th>
 <th>CNE</th>
 <th>Adresse</th>
 <th>Ville</th>
 <th>E_mail</th>
 <th>Photo</th>
 </th><thead>\n";
 function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    } 
    return false;
}
    for ($i = 0; $i < $nblignes; $i = $i + 1) {
        $id =  mysqli_result($result, $i, "ID_eleve");
        $nom = mysqli_result($result, $i, "Nom");
        $prenom =  mysqli_result($result, $i, "Prenom");
        $cne = mysqli_result($result, $i, "CNE");
        $adresse = mysqli_result($result, $i, "Adresse");
        $Ville = mysqli_result($result, $i, "Ville");
        $e_mail =  mysqli_result($result, $i, "email");
        $photo = mysqli_result($result,$i,"Photo");
        echo "<tbody><tr>
        <td>$id</td>
        <td>$nom</td>
      <td>$prenom</td>
      <td>$cne</td>
      <td>$adresse</td>
      <td>$Ville</td>
      <td>$e_mail</td>
      <td><img alt=\"image\" src=".$photo." width=\"150px\" height=\"150px\" </td></tr><tbody>";
    }
    echo "</table>";
    mysqli_close($conn);}
    else{
        echo '<center>';
        echo 'you have to login <br>';
        echo "<a href=\"home.php\">login</a>";
    }
    ?>
    
</body>

</html>