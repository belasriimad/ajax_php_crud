<?php 
include('database/db.php');
$search = $_POST['search'];
if(!empty($search)){
    $query = "SELECT * FROM contacts WHERE name LIKE '$search%'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count <= 0){
        die('Nothing found');
    }
    while($row = mysqli_fetch_array($result)):?>
        <ul class="list-group">
            <?php echo '<li class="list-group-item">'.$row['name'].'Tél: <span class="text-danger">'.$row
            ['tel'].'</span></li>'?>
        </ul>
    <?php
    endwhile;
}