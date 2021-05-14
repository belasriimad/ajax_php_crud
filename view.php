<?php
include('database/db.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM contacts WHERE id='$id'";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
       echo '<form action="update.php" id="contact-update">';
       echo '<div class="form-group"><label for="nom">Name:</label> <input data-id="'.$row['id'].'" type="text" id="nom" name="nom" value="'.$row['name'].'" class="form-control input-nom"></div>';
       echo '<div class="form-group"><label for="tel">Phone:</label> <input type="text" id="tel" name="tel" value="'.$row['tel'].'" class="form-control input-tel"></div>';
       echo '<a href="javascript:void(0)" class="btn btn-danger" id="contact-delete" data-id="'.$row['id'].'">Supprimer</a>|<button type="submit" class="btn btn-warning">Modifier</button>';
       echo '</form>';
    }
}
?>
<script>
$('#contact-update').submit(function(e){
    e.preventDefault();
    var nom = $('.input-nom').val();
    var tel = $('.input-tel').val();
    var id = $('.input-nom').attr('data-id');
    var data = {nom:nom,tel:tel,id:id};
    var url = $(this).attr('action');
    $.post(url,data,function(response){
        $('#alert-success').css('display','block').html(response);
        reload();
        clearFileds();
    });
});
$('#contact-delete').on('click',function(){
    if(confirm('Are you sure ?')){
        var id = $(this).attr('data-id');
        var url = 'delete.php';
        var data = {id:id};
        $.post(url,data,function(response){
        $('#alert-success').css('display','block').html(response);
        reload();
        clearFileds();
    });
    }
});
function reload(){
     $.ajax({
        url:'get-contacts.php',
        type:'GET',
        success:function(data){
            if(!data.error){
                $('#get-contacts').html(data);
            }
        }
     });
}
function clearFileds(){
    $('.input-nom').val("");
    $('.input-prenom').val("");
    $('.input-tel').val("");  
}
</script>