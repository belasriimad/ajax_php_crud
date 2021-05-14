<?php
include('database/db.php');
$query = "SELECT * FROM contacts";
$result = mysqli_query($con,$query);
if(empty($result)){
    die('Nothing found');
}
while($row = mysqli_fetch_array($result)){
    echo '<tr>
        <td>'.$row['id'].'</td>
        <td><a data-id="'.$row['id'].'" class="link-nom" href="javascript:void(0)">'.$row['name'].'</a></td>
    </tr>';
}
?>
<script>
$('.link-nom').on('click',function(){
    var id = $(this).attr('data-id');
    $.post('view.php',{id:id},function(data){
        $('#view').html(data);
    });
});
</script>