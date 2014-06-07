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
    $('#contact').on('click',function(){
        $('.contact-content').addClass('show-content');
    });
    $('.close').on('click',function(){
        $('.contact-content').removeClass('show-content');
    });
});