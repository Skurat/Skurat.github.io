$.getJSON('/tools/tools.json', function(data){
        
        for(let i = 0; i < data.language.length; i++){
            let name = data.language[i].name;
            $('ul#language').append('<li name="'+name+'">'+name+'</li>');
        }
        for(let i = 0; i < data.other.length; i++){
            let name = data.other[i].name;
            $('ul#other').append('<li name="'+name+'">'+name+'</li>');
        }
        
        $('ul#language, ul#other').on('click', 'li', function(){
            
            let __mainPrnt = '.' + $(this).parent().parent().parent().attr('class') + ' .halfInfo';
            let __prnt = $(this).parent().attr('id'); /* PARENT ELEMENT */
            let name = $(this).attr('name'); /* NAME OF EVENT TARGET */
            let __url = '/tools/'+__prnt+'/' + name + '.tmpl'; /* PATH TO TEMPLATE */
            $.get(__url, function(data){
                let __img = __mainPrnt + ' img';
                let __info = __mainPrnt + ' .' + __prnt + 'Info';
                $(__img).animate({
                    left: '-100%', 
                    'opacity': 0}, 300);
                $(__info).html(data);
            });
    });
});  