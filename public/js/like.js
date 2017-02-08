
$(function(){
    $('.like_status').click(function(e){
        e.preventDefault();
        var id = $(this).data('status-id');
        console.log('working..'+id);
        $.ajax({
            url:'/status/'+id+'/like',
            type:'GET',
            data:{
                'id':id,
            },
            success:function(data,status)
            {
                $('#likes_count').html(data);
            },
            error:function(data)
            {
                $('#likes_count').html(data);
            }
        });
    });
    // $(window).load(alert('hello'));
});