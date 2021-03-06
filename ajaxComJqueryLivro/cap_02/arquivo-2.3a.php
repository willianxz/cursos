<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="all">
#mensagem_erro p {
	padding:3px 20px;
	width:378px;
	border: 1px solid #ccc;
	background:#eee;
	font-size:14px;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$('p').mouseover(function() {
		$(this).css('background', 'yellow');
	}).mouseout(function() {
		$(this).css('background', 'none');
	});
	
	$('#carrega').click(function(e) {
	e.preventDefault();
		$.ajax({
			url: 'exemplo-ajax-live.php', 
			dataType: 'html',
			type: 'GET',
			success: function(data) {
			$('#insere_aqui').html(data);
			},
			error: function(xhr,er) {
			$('#mensagem_erro').html('<p class="destaque">Lamento ocorreu um erro na requisi��o. Por favor tente mais tarde</p>')
			}		
		});
	});
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisi��o <span class="destaque">sem</span> uso do m�todo live( )</h1>
<fieldset>
<button type="button" id="carrega">Enviar</button>
<ul>
<li>Depois da p�gina ter sido carregada passe o mouse sobre os dois par�grafos existentes => a cor de fundo deles muda para amarelo;</li>
<li>Fa�a a requisi��o clicando o bot�o "Enviar" e depois passe o mouse sobre os dois par�grafos inseridos => a cor de fundo deles n�o muda, embora a dos dois par�grafos existentes antes da requisi��o continue mudando.</li>
</ul>
<div>Conclus�o: Comportamentos atrelados a elementos j� existentes no DOM n�o s�o herdados pelos elementos de mesmo tipo inseridos via AJAX.<br />
Consulte o arquivo seguinte para visualizar como for�ar a heran�a com uso do m�todo <code>live( )</code>.</div>
</fieldset>
<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>
<p><strong>Primeiro par�grafo</strong>: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisse potenti.</p>
<p><strong>Segundo par�grafo</strong>: Donec ullamcorper cursus dolor. Duis vitae ipsum. Maecenas dapibus hendrerit diam. Morbi varius, massa id pretium accumsan, nunc lorem congue libero, ut euismod metus libero id nulla. Duis posuere odio sed velit vulputate venenatis. Suspendisse et dui ac metus auctor fringilla. Curabitur interdum augue a pede.</p>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-2.2m.php">&laquo; anterior</a> | <a href="arquivo-2.3b.php">pr�ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
