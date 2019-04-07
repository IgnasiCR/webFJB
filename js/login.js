function aparecer(){
        
        var cuadro=document.getElementById('login');
        
        setTimeout(function(){ cuadro.style.display = "block";}, 10);
              
        setTimeout(function(){ cuadro.style.opacity = "1";}, 100);
    }
        
        function desaparecer(){
        
        var cuadro=document.getElementById('login');
        
        setTimeout(function(){ cuadro.style.opacity = "0";}, 10);
              
        setTimeout(function(){ cuadro.style.display = "none";}, 550);
            
    }