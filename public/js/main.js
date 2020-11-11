

    window.onload = function() {

        $(".overLay .spinner").fadeOut(3000,function(){
            $(this).parent().fadeOut(1000,function(){
                $(this).remove();
                $("body").css("overflow","auto");
            });
        });

    };


