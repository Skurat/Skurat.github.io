$(document).ready(function(){
    
    var loadProjects = function(){
        $.getJSON('project/project.json', function(data){
        
            let projLeft = $('.projects .projInner .projLeft').attr('curproj');
            let projMain = $('.projects .projInner .projMain').attr('curproj');
            let projRight = $('.projects .projInner .projRight').attr('curproj');

            let projects = $('.projects .projInner>li');

            $('.projInfo .projInner .projName a').text(data[projMain].title);
            $('.projInfo .projInner .projName a').attr('href', data[projMain].url);
            $('.projInfo .projInner .projList .tag span').text(data[projMain].tag);
            $('.projInfo .projInner .projList .myWork span').text(data[projMain].subscribe);
            $('.projInfo .projInner .projSubscribe span').text(data[projMain].work);
            
            $('.projects .projInner .projLeft img').attr('src', data[projLeft].image);
            $('.projects .projInner .projMain img').attr('src', data[projMain].image);
            $('.projects .projInner .projRight img').attr('src', data[projRight].image);
            
        });
    }
    $('a[href="#left"]').on('click', function(){
        let li = $('.projects .projInner>li');
        for(let i = 0; i < li.length; i++){
            let count = $(li[i]).attr('curproj');
            console.log(li[i]);
            if(parseInt(count) - 1 < 0){
                    $(li[i]).attr('curproj', li.length-1);
               }else{
                    $(li[i]).attr('curproj', parseInt(count) - 1);
               }
        }
        loadProjects();
    });
    $('a[href="#right"]').on('click', function(){
        let li = $('.projects .projInner>li');
        for(let i = 0; i < li.length; i++){
            let count = $(li[i]).attr('curproj');
//            $(li[i]).children()[0];
            if(parseInt(count) + 1 >= li.length){
                    $(li[i]).attr('curproj', 0);
               }else{
                    $(li[i]).attr('curproj', parseInt(count) + 1);
               }
        }
        loadProjects();
    });
    
    loadProjects();
    
    
    console.log("Required");
    $('a').on('click', function(e){
        e.preventDefault();
    });
});