$(document).ready(function(){
    $.getScript('/project/project.js');

    $.getScript('/tools/tools.js'); 
    
    /*$.ajax({
        'url': 'test.php',
        'success': function(data){
            
            console.log(JSON.parse(data)[0]);
        }
    });*/
    
    $('#links li a, .navbar-header a').on('click', function(){
        let s = $(this).attr('href');
        $('body, html').animate({scrollTop: (Math.floor($(s).offset().top)-50)+'px'},500);
        return false;
    });
    //console.log('Required');
});