<?php
include('database/db.php');
if(isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['id'])){
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $id = $_POST['id'];
    $query = "UPDATE contacts set name = '$nom',tel = '$tel' WHERE id = '$id'";
    if(mysqli_query($con,$query)){
        echo 'Contact updated';
    }else{
        echo 'Error try later';
    }
}else{
    echo 'Error try later';
}