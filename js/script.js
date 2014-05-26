$(function  () {
    $('nav li').on('click',function(){
        var id = $(this).data('id');
        if($('#'+id).hasClass('show-section')){
            $('section').removeClass('show-section');
        }else{
            $('section').removeClass('show-section');
            $('#'+id).addClass('show-section');
        }
    });

    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);

  
});