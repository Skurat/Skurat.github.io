$(document).ready(function(){
    $.getScript('/project/project.js');

    $.getJSON('/tools/tools.json', function(data){
        console.log(data[0].templateUrl);
        $.get(data[0].templateUrl, function(data){
            console.log(data);
            $('.lang .halfInfo img').animate({opacity: '0'}, 300);
            $('.lang .halfInfo .langInfo').html(data);
        });
    });   
    
    $('#links li a, .navbar-header a').on('click', function(){
        let s = $(this).attr('href');
        $('body, html').animate({scrollTop: (Math.floor($(s).offset().top)-50)+'px'},500);
        return false;
    });
    
    console.log('Required');
});