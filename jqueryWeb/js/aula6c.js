$(function(){
   
    var a = 0;
    
    $('.ev6').mouseenter(function(){
       a +=1;
       ex.text("Entradas do mouse: "+a);
    }).mouseout(function(){
        ex.text("Saida do mouse ");
    });
    
    
});