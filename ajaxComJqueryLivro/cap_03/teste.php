<?php include("../includes-arquivos/doc-meta.inc.php"); ?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
		var iconCarregando = $('<img src="../icon/mini.gif" class="icon" /> <span class="destaque">Carregando. Por favor aguarde...</span>');
	$('#form_um').submit(function(e) {
	e.preventDefault();
	var serializeDados = $('#form_um').serialize();
	
	$.ajax({
			url: 'exemplo-teste.php', 
			dataType: 'html',
			type: 'POST',
			data: serializeDados,
			beforeSend: function(){
			$('#insere_aqui').html(iconCarregando);
			},
			complete: function() {
			$(iconCarregando).remove();
			},
			success: function(data, textStatus) {
			$('#insere_aqui').html('<p>' + data + '</p>');
			},
			error: function(xhr,er) {
				$('#mensagem_erro').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er +'</p>')
			}		
		});
	});	
})
</script>
</head>
<body>
<div id="tudo">
<div id="conteudo">
<h1>Exemplo de requisi��o com uso do m�todo serialize( )</h1>
<fieldset>
<legend>Entre os dados a enviar</legend>
<form action="exemplo-teste.php" method="post" id="form_um"> 
<p><label for="nome">Nome:<br />	
<input name="nome" type="text" id="nome" size="35" value="" />
</label><span class="destaque">(Obrigat�rio)</span></p>	

<p><label for="email">E-mail:<br />
<input name="email" type="text"  id="email" size="35" value="" />
</label><span class="destaque">(Obrigat�rio) </span>- n�o ser� divulgado</p>


<p><label for="comentario">Coment�rio: (mais de 8 caracteres)<br />
<textarea name="comentario" cols="35"   rows="8" id="comentario">
</textarea></label><span class="destaque">(Obrigat�rio)</span></p>




<input type="submit" value="submit" />
</form>
</fieldset>

<div id="mensagem_erro"></div>
<div id="insere_aqui"></div>

<div id="nav">Arquivos exemplo do livro do Maujor | AJAX com jQuery: <a href="arquivo-3.2b.php">&laquo; anterior</a> | <a href="arquivo-3.3b.php">pr�ximo &raquo;</a></div>

</div>
</div>
</body>
</html>
