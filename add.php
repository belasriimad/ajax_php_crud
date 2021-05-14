<?php
include('database/db.php');
if(isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['prenom'])){
    $nom = $_POST['nom'].' '.$_POST['prenom'];
    $tel = $_POST['tel'];
    $query = "INSERT INTO contacts (name,tel) values('$nom','$tel')";
    if(mysqli_query($con,$query)){
        echo 'Contact Added';
    }else{
        echo 'Error try later';
    }
}