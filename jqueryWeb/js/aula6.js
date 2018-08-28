
$(function(){
    //OBS: EVENTOS DE MOUSE SEMPRE USA FUNCTION()!
    var ex = $('.ex1');
    
   $('.ev1').click(function(){
     $(this).css("background","#ccc");
     ex.text("Você Clicou!");
     $(this).text("Clicado.")
   });
   
   $('.ev2').dblclick(function(){
      $(this).css("background","#ccc");
      ex.text("Você deu dois Clicou!");
   });
   
   
   $('.ev3').focusin(function(){
      $(this).css("background","#ccc");
      ex.text("Você deu foco!");
   }).focusout(function(){
        $(this).css("background","#000");
         ex.text("Você tirou o foco!");
   });
   
   $('.ev4').hover(function(){
       $(this).css("background","#ccc");
       ex.text("Você passou o mouse!");
   });
   
   $('.ev5').mousedown(function(){
       $(this).css("background","#ccc");
       ex.text("Você apertou o botão do mouse!");
   }).mouseup(function(){
       $(this).css("background","#000");
       ex.text("Você soltou o botão do mouse!");
   });
   
});