<?php


$connection = mysqli_connect('localhost', 'root', '', 'git');
if(isset($_POST['send'])){
    $nom = $_POST['nom'];
   
    $matricule = $_POST['matricule'];
$request = "insert into glo(nom, matricule) values('$nom', '$matricule')";
mysqli_query($connection, $request);
header('location:register.php');

}else{
    echo('entrez les valeurs');
}

?>