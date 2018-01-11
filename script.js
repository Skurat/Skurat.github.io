var request = new XMLHttpRequest();
request.open('GET', 'include.json');
request.send();

    request.onreadystatechange = function(){
    if(request.readyState != 4){return;}
    if(request.status != 200){alert(request.status)}
    else{
        var incl = JSON.parse(request.responseText);
            for(let i = 0; i < incl.js.length; i++){
                var script = document.createElement('script');
                script.setAttribute('src', incl.js[i]);
                var sd = document.getElementById('scripts');
                document.body.appendChild(script);
            }
            for(let i = 0; i < incl.css.length; i++){
                var link = document.createElement('link');
                link.setAttribute('rel', 'stylesheet');
                link.setAttribute('href', incl.css[i]);
                document.head.append(link);
            }
        }
    };