var i = 0;
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
        $('.contact-content').removeClass('closeMove');
        $('.contact-content').addClass('show-content');
    });
    $('.close').on('click',function(){
        $('.contact-content').removeClass('show-content');
        $('.contact-content').addClass('closeMove');
    });
    setInterval(function(){changeBack()},10000);
});
function changeBack(){

    var colorSet = ['#122c43', '#34577b', '#1d606f', '#24063d'];
    $('body').css('background',colorSet[i]);
    console.log(i);
    i++;
    if(i > 4){
        i=0;
    }


}