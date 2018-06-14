$(document).ready(function(){

    
    $("#loginForm").bind('submit',function(){
        
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            beforesend:function(){
                $("#loginForm input[type=submit]").html('Charging...');
                $("#loginForm input[type=submit]").attr('disabled','disabled')
            },
            success:function(response){
                if(response.state=="true"){
                    $("body").overhang({
                        type: "success",
                        message: "Woohoo! It works!",
                        callback:function(){
                            window.location.href="admin.php"
                        }
                    });
                }else{
                    $("body").overhang({
                        type: "error",
                        message: "Whoops! Something went wrong!",
                        closeConfirm: true
                      });
                }
                $("#loginForm input[type=submit]").html('Login');
                $("#loginForm input[type='submit']").removeAttr('disabled')
            },
            error:function(){
                $("body").overhang({
                    type: "error",
                    message: "Whoops! Something went wrong!",
                    closeConfirm: true
                });
                $("#loginForm input[type=submit]").html('Login');
                $("#loginForm input[type=submit]").removeAttr('disabled')
            }

        })

        
        //$("#loginForm input[type=submit]").removeAttr('disabled');*/
        
        return false;
    })
});
