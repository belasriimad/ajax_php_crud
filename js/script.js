$(document).ready(function(){
     $.ajax({
        url:'get-contacts.php',
        type:'GET',
        success:function(data){
            if(!data.error){
                $('#get-contacts').html(data);
            }
        }
     })
     $('#search').keyup(function(){
        var contact = $('#search').val();
        $.ajax({
            url:'search.php',
            type:'POST',
            data:{search:contact},
            success:function(data){
                if(!data.error){
                    $('#result').html(data);
                }
            }
        });
     });
     $('#add-contact').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        $.post(url,data,function(response){
            $('#alert-success').css('display','block').html(response);
            reload();
            $('#add-contact')[0].reset();
        });
     });
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