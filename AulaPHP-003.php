<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Testando php</title>
</head>
<body>
	<header id="cabecalho">
		<h1 class="fonte">Começando a testar comandos em PHP</h1>
	</header>
	<div id="formulario">
		<form method="get" autocomplete="off">
			<fieldset>
			</fieldset>
			<button type="submit">Enviar</button>
		</form>
	</div>
	<div class="conteudo">
		<p class="fonte">Teste Andreia</p>
		<code>
			<?php 
				$nome = "Andreia Hoffmann";
				$palavras = str_word_count($nome, 0);
				$nasc = 2000;
				$idade = 2022 - $nasc;
				// var_export($palavras);
				echo "$nome tem $palavras palavras no nome.";
			 ?>
		</code>
	</div>
	<footer>
		<button id="left"><a href="aulaphp-002.php">Voltar Página</a></button>
		<button id="right"><a href="aulaphp-003.php">Próxima Página</a></button>
	</footer>
</body>
</html>