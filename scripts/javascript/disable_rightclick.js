$(document).ready(function() {
    $("img").on("contextmenu",function(){
       return false;
    });
    $('img').on('dragstart', function(e) {
        return false;
    });
});