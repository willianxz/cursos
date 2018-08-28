<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JQUERY</title>

<base href="http://www.scipiracicaba.com.br/">

<meta name="Description" content="Faça parte desta carteira de divulgadores. Mais praticidade para sua vida e melhora de renda." />



<link rel='apple-touch-icon' type='image/png' href='icon.57.png'> <!-- iPhone -->
<link rel='apple-touch-icon' type='image/png' sizes='72x72' href='icon.72.png'> <!-- iPad -->
<link rel='apple-touch-icon' type='image/png' sizes='114x114' href='icon.114.png'> <!-- iPhone4 -->

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/estilo.css" type="text/css">

<!-- JQuery / Script -->
<script language="JavaScript" src="scripts/jquery-1.10.2.js"></script>
<script language="JavaScript" src="scripts/jquery-ui-1.10.4.custom.js"></script>
<script language="JavaScript" src="scripts/scripts.js"></script>



<script type="text/javascript">

$(document).ready(function () {

	$(".fancybox").fancybox({
		openEffect	: "fade",
		closeEffect	: "fade"	
	});

});

$(document).ready(function() {
	$(".fancyboxc").fancybox({
	openEffect	: 'elastic',
	closeEffect	: 'elastic',
	scrolling : 'no'
	});
});

$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 750,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '80%',
		scrolling: 'no',
		autoSize	: false,
		//beforeLoad: function () {$("body").css({ "overflow-y" : "scroll" });$("html").css({ "overflow-y" : "scroll" });},
		//afterClose: function () {$("body").css({ "overflow-y" : "scroll" });$("html").css({ "overflow-y" : "hidden" });},
		closeClick	: true,
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
});

$(document).ready(function() {
	$(".various2").fancybox({
		maxWidth	: 700,
		maxHeight	: 400,
		fitToView	: false,
		width		: '70%',
		height		: '80%',
		scrolling: 'no',
		autoSize	: true,
		//beforeLoad: function () {$("body").css({ "overflow-y" : "scroll" });$("html").css({ "overflow-y" : "scroll" });},
		//afterClose: function () {$("body").css({ "overflow-y" : "scroll" });$("html").css({ "overflow-y" : "hidden" });},
		closeClick	: true,
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
});

</script>
<!-- /Fancy Box -->
</head>

<body onclick="efeito_fecha('div_menu')" onload="rolagemBloco(0,0)">



<style type="text/css">
.divTitulo {float:left;width:160px;height:33px;border:1px solid #e6e6e6;border-top:0px;border-bottom:0px;font-family:tahoma,verdana;font-size:12px;background:url('imagens/logotipo-sci.png') no-repeat 15px 6px #ffffff;padding-left:60px;padding-bottom:2px;padding-top:5px;color:#888888;text-align:left;}
.divBloco {position:relative;width:220px;height:240px;border:1px solid #e6e6e6;overflow:hidden;}
.bloco1 {position:absolute;top:0px;width:220px;font-family:tahoma;font-size:13px;background:#ffffff}
.bloco2 {position:absolute;top:252px;width:220px;font-family:tahoma;font-size:13px;background:#ffffff}
.bloco3 {position:absolute;top:252px;width:220px;font-family:tahoma;font-size:13px;background:#ffffff}
.cidade {font-family:tahoma,verdana;font-size:11px;text-transform:capitalize}
.nome {width:100%;float:left;text-align:left;font-family:tahoma,verdana;font-size:11px;height:36px;padding-left:8px;padding-top:5px;border-bottom:1px solid #e6e6e6;line-height:15px}

</style>

<script type="text/javascript">
function rolagemBloco(nome,altura){
$(".bloco1").animate({top:altura +"px"},500,function(){
nome = parseFloat(nome) + 1;
altura = parseFloat(altura) - 42;

	if (nome == 21){ //21
	} else if (nome == 14){ //14
	setTimeout("rolagemBloco("+ nome +","+ altura +")",1000);
	setTimeout("rolagemBloco2(0,252)",1000);
	} else if (nome == 1){ //14
	$(".bloco2").css({"top":"252px"});
	setTimeout("rolagemBloco("+ nome +","+ altura +")",1000);
	} else {
	setTimeout("rolagemBloco("+ nome +","+ altura +")",1000);
	}

});
}

///////// BLOCO 1 /////////////////////

function rolagemBloco1(nome,altura){
$(".bloco1").css({zIndex:"2"});
$(".bloco1").animate({top:altura +"px"},500,function(){
nome = parseFloat(nome) + 1;
altura = parseFloat(altura) - 42;

	if (nome == 21){ //14
	setTimeout("rolagemBloco2(1,210)",1000);
	setTimeout("rolagemBloco1("+ nome +","+ altura +")",1000);
	$(".bloco2").css({zIndex:"1"});
	} else if (nome == 1){ //14
	$(".bloco2").css({"top":"252px"});
	setTimeout("rolagemBloco1("+ nome +","+ altura +")",1000);
	} else if (nome == 27){ //14
	} else {
	setTimeout("rolagemBloco1("+ nome +","+ altura +")",1000);
	}

});
}

///////// BLOCO 2 /////////////////////

function rolagemBloco2(nome,altura){
$(".bloco2").css({zIndex:"2"});
$(".bloco2").animate({top:altura +"px"},500,function(){
nome = parseFloat(nome) + 1;
altura = parseFloat(altura) - 42;

	if (nome == 21){ //14
	setTimeout("rolagemBloco3(1,210)",1000);
	setTimeout("rolagemBloco2("+ nome +","+ altura +")",1000);
	$(".bloco3").css({zIndex:"1"});
	} else if (nome == 1){ //14
	$(".bloco3").css({"top":"252px"});
	setTimeout("rolagemBloco2("+ nome +","+ altura +")",1000);
	} else if (nome == 27){ //14
	} else {
	setTimeout("rolagemBloco2("+ nome +","+ altura +")",1000);
	}

});
}

///////// BLOCO 3 /////////////////////

function rolagemBloco3(nome,altura){
$(".bloco3").css({zIndex:"2"});
$(".bloco3").animate({top:altura +"px"},500,function(){
nome = parseFloat(nome) + 1;
altura = parseFloat(altura) - 42;

	if (nome == 21){ //14
	setTimeout("rolagemBloco1(1,210)",1000);
	setTimeout("rolagemBloco3("+ nome +","+ altura +")",1000);
	$(".bloco1").css({zIndex:"1"});
	} else if (nome == 1){ //14
	$(".bloco1").css({"top":"252px"});
	setTimeout("rolagemBloco3("+ nome +","+ altura +")",1000);
	} else if (nome == 27){ //14
	} else {
	setTimeout("rolagemBloco3("+ nome +","+ altura +")",1000);
	}

});
}
</script>




	<table class="tabela-conteudo" align="center">
	<tr>
	
	<td valign="top" align="center" style="width:200px;height:283px;background:#fafafa">
		<table cellpadding="0" cellspacing="0" style="max-height:283px">
		<tr><td valign="top" align="center" style="max-height:283px;padding-right:3px">

                        <center><div class="divTitulo"><b>A cada minuto um<br>novo cliente na SCI</b></div></center>
			<div class="divBloco">
					
                                <div id="bloco1" class="bloco1"><div class="nome">FELIPE COSTA CORRÊA<br /><span class="cidade">Rio das Ostras/RJ</span></div><div class="nome">GRAZIELLA ALEXANDRA SOARES<br /><span class="cidade">Belo Horizonte/MG</span></div><div class="nome">MARCOS ROBSON DE AQUINO SOARES<br /><span class="cidade">Coroatá/MA</span></div><div class="nome">ROMILDO CARDOSO DA SILVA<br /><span class="cidade">Serra/ES</span></div><div class="nome">JENIFFER LUANA DA SILVA LEITE<br /><span class="cidade">Toledo/PR</span></div><div class="nome">SILMARA VIEIRA<br /><span class="cidade">Balneário Piçarras/SC</span></div><div class="nome">JOIRIAB FERREIRA DE ARAUJO<br /><span class="cidade">Lucas do Rio Verde/MT</span></div><div class="nome">REGIANE ALVES DA SILVA<br /><span class="cidade">Apucarana/PR</span></div><div class="nome">VIVIANE DA SILVEIRA<br /><span class="cidade">Pinhalzinho/SC</span></div><div class="nome">JOSE MARQUES DA SILVA NETO<br /><span class="cidade">Suzano/SP</span></div><div class="nome">MARIA CAROLINA DOS SANTOS BRAND...<br /><span class="cidade">Piraju/SP</span></div><div class="nome">MARLOS WILSON DALPIM<br /><span class="cidade">Poços de Caldas/MG</span></div><div class="nome">LINDOMAR GIOVANI GASDA JUNIOR<br /><span class="cidade">Massaranduba/SC</span></div><div class="nome">SILVONEI MANOEL BARBOSA ROCHA<br /><span class="cidade">Capelinha/MG</span></div><div class="nome">PAULO DE CASTRO PEREIRA<br /><span class="cidade">São José dos Pinhais/PR</span></div><div class="nome">GILMAR RODRIGUES MOURA <br /><span class="cidade">São Paulo/SP</span></div><div class="nome">EDSON ALVES DE SOUZA<br /><span class="cidade">Jandira/SP</span></div><div class="nome">ALAN CASTER RIBEIRO NASCIMENTO <br /><span class="cidade">Iturama/MG</span></div><div class="nome">MÁRCIA REGINA DE MELO<br /><span class="cidade">Belo Horizonte/MG</span></div><div class="nome">ALESSANDRO FERREIRA DE OLIVEIRA<br /><span class="cidade">Pelotas/RS</span></div></div>
				<div id="bloco2" class="bloco2"><div class="nome">FELIPE COSTA CORRÊA<br /><span class="cidade">Rio das Ostras/RJ</span></div><div class="nome">GRAZIELLA ALEXANDRA SOARES<br /><span class="cidade">Belo Horizonte/MG</span></div><div class="nome">MARCOS ROBSON DE AQUINO SOARES<br /><span class="cidade">Coroatá/MA</span></div><div class="nome">ROMILDO CARDOSO DA SILVA<br /><span class="cidade">Serra/ES</span></div><div class="nome">JENIFFER LUANA DA SILVA LEITE<br /><span class="cidade">Toledo/PR</span></div><div class="nome">SILMARA VIEIRA<br /><span class="cidade">Balneário Piçarras/SC</span></div><div class="nome">JOIRIAB FERREIRA DE ARAUJO<br /><span class="cidade">Lucas do Rio Verde/MT</span></div><div class="nome">REGIANE ALVES DA SILVA<br /><span class="cidade">Apucarana/PR</span></div><div class="nome">VIVIANE DA SILVEIRA<br /><span class="cidade">Pinhalzinho/SC</span></div><div class="nome">JOSE MARQUES DA SILVA NETO<br /><span class="cidade">Suzano/SP</span></div><div class="nome">MARIA CAROLINA DOS SANTOS BRAND...<br /><span class="cidade">Piraju/SP</span></div><div class="nome">MARLOS WILSON DALPIM<br /><span class="cidade">Poços de Caldas/MG</span></div><div class="nome">LINDOMAR GIOVANI GASDA JUNIOR<br /><span class="cidade">Massaranduba/SC</span></div><div class="nome">SILVONEI MANOEL BARBOSA ROCHA<br /><span class="cidade">Capelinha/MG</span></div><div class="nome">PAULO DE CASTRO PEREIRA<br /><span class="cidade">São José dos Pinhais/PR</span></div><div class="nome">GILMAR RODRIGUES MOURA <br /><span class="cidade">São Paulo/SP</span></div><div class="nome">EDSON ALVES DE SOUZA<br /><span class="cidade">Jandira/SP</span></div><div class="nome">ALAN CASTER RIBEIRO NASCIMENTO <br /><span class="cidade">Iturama/MG</span></div><div class="nome">MÁRCIA REGINA DE MELO<br /><span class="cidade">Belo Horizonte/MG</span></div><div class="nome">ALESSANDRO FERREIRA DE OLIVEIRA<br /><span class="cidade">Pelotas/RS</span></div></div>
				<div id="bloco3" class="bloco3"><div class="nome">FELIPE COSTA CORRÊA<br /><span class="cidade">Rio das Ostras/RJ</span></div><div class="nome">GRAZIELLA ALEXANDRA SOARES<br /><span class="cidade">Belo Horizonte/MG</span></div><div class="nome">MARCOS ROBSON DE AQUINO SOARES<br /><span class="cidade">Coroatá/MA</span></div><div class="nome">ROMILDO CARDOSO DA SILVA<br /><span class="cidade">Serra/ES</span></div><div class="nome">JENIFFER LUANA DA SILVA LEITE<br /><span class="cidade">Toledo/PR</span></div><div class="nome">SILMARA VIEIRA<br /><span class="cidade">Balneário Piçarras/SC</span></div><div class="nome">JOIRIAB FERREIRA DE ARAUJO<br /><span class="cidade">Lucas do Rio Verde/MT</span></div><div class="nome">REGIANE ALVES DA SILVA<br /><span class="cidade">Apucarana/PR</span></div><div class="nome">VIVIANE DA SILVEIRA<br /><span class="cidade">Pinhalzinho/SC</span></div><div class="nome">JOSE MARQUES DA SILVA NETO<br /><span class="cidade">Suzano/SP</span></div><div class="nome">MARIA CAROLINA DOS SANTOS BRAND...<br /><span class="cidade">Piraju/SP</span></div><div class="nome">MARLOS WILSON DALPIM<br /><span class="cidade">Poços de Caldas/MG</span></div><div class="nome">LINDOMAR GIOVANI GASDA JUNIOR<br /><span class="cidade">Massaranduba/SC</span></div><div class="nome">SILVONEI MANOEL BARBOSA ROCHA<br /><span class="cidade">Capelinha/MG</span></div><div class="nome">PAULO DE CASTRO PEREIRA<br /><span class="cidade">São José dos Pinhais/PR</span></div><div class="nome">GILMAR RODRIGUES MOURA <br /><span class="cidade">São Paulo/SP</span></div><div class="nome">EDSON ALVES DE SOUZA<br /><span class="cidade">Jandira/SP</span></div><div class="nome">ALAN CASTER RIBEIRO NASCIMENTO <br /><span class="cidade">Iturama/MG</span></div><div class="nome">MÁRCIA REGINA DE MELO<br /><span class="cidade">Belo Horizonte/MG</span></div><div class="nome">ALESSANDRO FERREIRA DE OLIVEIRA<br /><span class="cidade">Pelotas/RS</span></div></div>

			</div>

		</td></tr>
		</table>
	</td>
	</tr>
	</table>


  
</body>
</html>

