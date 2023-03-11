$( document ).ready(function() {
    setTimeout(function(){
        if ($(".o_livechat_button").length < 1){
            $(".nav-right .fa-commenting-o").parent().hide();
        }
    }, 1000);
});