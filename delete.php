<?php
include('database/db.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "DELETE FROM contacts WHERE id='$id'";
    mysqli_query($con,$query);
    echo 'Contact Deleted';
}
?>