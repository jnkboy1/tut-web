
$(function(){
   var $loading =  $('#loading');
   $('#codex-loading').hide();
   
   $loading.hide();
    //.hide();
     
   // window.load = alert("hi..");
   $('.ln-tut-left').on("click",function(event){
        event.preventDefault();
        $loading.show();
        var id = $(this).data('art-id');
        
        $(this).css({'class':'active'});
        //alert(id);
        // var $loading = $('#loadingDiv').hide();
       
        $.ajax({
            type:'GET',
            url:'/articles/'+id,
            success:function(data, status){
                console.log('working..');
                $loading.hide();
                $('#ajax-container').html('<div id="aj-title"><b>'+data['title']+
                    '</b></div><br><div>'+data['body']+'</div>'
                );
            },
            error: function(e) {
                console.log(e.responseText);
            }
        });
   });

   $('#btn-run').on('click', function(event){
        $('#codex-loading').show();
        $.ajax({
            type:'GET',
            url:'/codex/result',
            data:{
                'code':$('#code').val(),
            },
            success:function(data,status){
                console.log(data);
                //$('#codex-loading').hide();
                $('#view').html(data);
            },
            complete:function(){
                $('#codex-loading').hide();
            },
            error:function(e)
            {
                console.log(e.responseText);
            }
        });
   });

   $('#btn-reset').on('click',function(){
       var text = $('#code');
       if(text.val().length>0)
       {
           text.val("");
       }
   });
});