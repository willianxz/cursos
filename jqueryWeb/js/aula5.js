


$(function(){
  
    $("img").error(function(){
     var imagem =  $(this).attr("src"); 
     alert("Imagem "+imagem+" indisponivel");
     $(this).attr("src","img/indisponivel.jpg"); //Se não for usado o this aqui, irá fazer todos as imagens serem a indisponivel se apenas 1 tiver errada.
   });
   
   
   $("img").width($(window).width()).height($(window).height());
   $(window).resize(function(){
       $("img").width($(window).width()).height($(window).height());
   });
   
   /*
   $(window).scroll(function(){
      $("img").fadeOut('1000'); faz um efeito de sumir a imagem quando decer com o scroll
   });
   */
   
});

