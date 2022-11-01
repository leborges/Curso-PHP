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
				<legend>Aula - While</legend>
				<label for="cN1">Inicio:</label>
				<input type="number" name="tN1" id="cN1">
				<label for="cN2">Fim:</label>
				<input type="number" name="tN2" id="cN2">
				<label>Incremento:</label>
				<select name="tIncremento" id="cIncremento" style="width: 100px;">
					<optgroup>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</optgroup>
				</select>
				<label>Tabuada do:</label>
				<select name="tTabuada" id="cTabuada" style="width: 100px;">
					<optgroup>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10" selected>10</option>
					</optgroup>
				</select>
			</fieldset>
			<fieldset>
				<legend>Aula - Rotinas em PHP</legend>
				<label>Rotina Externa</label>
				<label style="font-size: 10pt; text-indent: 10px; padding: 0px;">Tenho o script01.php e quero usar minhas funções em outro arquivo. Para isso utilizamos o <code>include "local do arquivo";</code> dentro das tags php.</label>
				<label>Include VS Require</label>
				<label style="font-size: 10pt; text-indent: 10px; padding: 0px;"><code>Include</code> mesmo sem encontrar o arquivo/funções chamadas ele irá tentar continuar executando o código.</label>
				<label style="font-size: 10pt; text-indent: 10px; padding: 0px;"><code>Require</code>, caso não encontre o arquivo/função chamada ele para e não prossegue, tirando toda a carga do sistema.</label>
				<label style="font-size: 10pt; text-indent: 10px; padding: 0px;">Além destes ainda temos a variação dos mesmos, que seriam o <code>require_once</code> e <code>include_once</code>, que vai verificar se ele já foi carregado uma vez dentro da sua página e não carregará o mesmo arquivo novamente. Mesmo que você faça dois includes ou requires.</label>
			</fieldset>
			<fieldset>
				<legend>Aula - Funções String</legend>
				<label for="cTextArea">Texto:</label>
				<textarea name="tTextArea" id="cTextArea" placeholder="Digite o texto aqui..." style="width: 209px"></textarea>
				<label for="cQuebra">Quebra:</label>
				<input type="number" name="tQuebra" id="cQuebra">
			</fieldset>
			<button type="submit">Enviar</button>
		</form>
	</div>
	<div class="conteudo">
		<p class="fonte">Aula - While</p>
		<code>
			<?php 
				$n1 = empty($_GET['tN1'])?"1":$_GET['tN1'];
				$n2 = empty($_GET['tN2'])?"10":$_GET['tN2'];
				$c = empty($_GET['tIncremento'])?"1":$_GET['tIncremento'];
				$i = $n1;
				
				while ($i <= $n2) {
					echo "$i ";
					$i += $c;
				}
				
				echo "<br><br>";
				$i += -1;

				do {
					echo "$i ";
					$i -= $c;
				} while ($i >= $n1);
				
				echo "<br>";

				$tab = empty($_GET['tTabuada'])?"10":$_GET['tTabuada'];
				$k = 1;
				while ($k <= 10) {
					echo "<br>$tab x $k = ".($tab*$k);
					$k++;
				}
			 ?>
		</code>
		<p class="fonte">Aula - For</p>
		<code>
			<?php 
				for ($i=1; $i <= 10; $i++) { 
					echo "$i ";
				}
			 ?>
		</code>
		<p class="fonte">Aula - Rotinas em PHP</p>
		<code>
			<?php 
				function soma ($n1, $n2) {
					// echo "O resultado da soma é ".($n1 + $n2);
					return ($n1 + $n2);
				}
				soma(3, 4);
				echo "> Resultado da soma é ".soma(5,9);

				function soma2() {
					$num = func_get_args();
					$tot = func_num_args();
					$soma = 0;

					for ($i=0; $i < $tot; $i++) { 
						$soma += $num[$i];
					}
					return $soma;
				}
				echo "<br>> Função SOMA2: ".soma2(10,20,30,40,50);

				function semReferencia($x) {
					$x += 2;
					return $x;
				}
				function comReferencia(&$x) {
					$x += 2;
					return $x;
				}
				$n3 = 3;
				$n4 = 3;
				echo "<br>> a = $n3 e x = ".semReferencia($n3);
				echo "<br>> b = $n4 e x = ".comReferencia($n4)."<br>> b = $n4 após chamada com referencia.";
			 ?>
		</code>
		<p class="fonte">Aula - Funções String</p>
		<code>
			<?php 
			# PRINT E VAR
				#Função printf() : Permite exibir uma string com itens formatados.
				$prod = "leite";
				$preco = 6.99;
				printf("> O valor do %s custa R$%.2f", $prod, $preco);
				# Funções usando printf
					# %d para valores decimais(positivo ou negativo)
					# %u para valores decimais(positivo)
					# %f para valores reais
					# %s para string
				echo "<br>";
				$v[0] = 4;
				$v[1] = 3;
				$v[2] = 8;
				print_r($v);

			# PRINT_R
				#Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
				echo "<br>";
				$v = array(1,2,3,4,5);
				print_r($v);
				# Também podemos substituir o print_r(); por:
					# var_dump(expression);
					# var_export(expression);

			# WORDWRAP
				#Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.
				$texto = empty($_GET['tTextArea'])?"> Texto gerado automaticamente":$_GET['tTextArea'];
				$quebra = empty($_GET['tQuebra'])?"20":$_GET['tQuebra'];
				echo wordwrap($texto, $quebra, "<br>\n", true);

			# STRLEN
				#Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
				$tamTexto = strlen($texto);
				echo "<br>> strlen retorna o tamanho da string: $tamTexto";

			# TRIM
				#Função ltrim() : Elimina espaços no início de uma string.
				#Função rtrim() : Elimina espaços em branco no final de uma string.
				$nome = " Leonardo   Borges ";
				$tamTexto = strlen($nome);
				echo "<br>> O texto é [$nome] e o tamanho é $tamTexto";
				$novoNome = trim($nome);
				$tamTexto = strlen($novoNome);
				echo "<br>> Agora o texto é [$nome] e o tamanho é $tamTexto";
				# Também temos as funções:
					# rtrim(str);
					# ltrim(str);

			# STR_WORD_COUNT
				#Função str_word_count() : Conta quantas palavras uma string possui.
				$novoTexto = "Curso em vídeo";
				echo "<br>> O texto é $novoTexto e usando o STR_WORD_COUNT obtemos: ".str_word_count($novoTexto, 0);
				// $v = str_word_count($novoTexto, 1);
				// var_export($v);
					# str_word_count(string, 0) Conta as palavras e retorna a quantidade de palavras.
					# str_word_count(string, 1) Armazena as palavras dentro de um array.
					# str_word_count(string, 2) Armazena as palavras dentro de um array, a primeira letra da palavra é a referencia do array.

			# EXPLODE
				#Função explode() : Quebra uma string e coloca os itens em um vetor.
				$v1 = explode(" ", $novoTexto);
				echo "<br>";
				var_export($v1);

			# STR_SPLIT
				#Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.
				$v2 = str_split("téste");
				echo "<br>";
				var_export($v2);

			# IMPLODE
				#Função implode() : Transforma um vetor inteiro em uma string.
				$v3 = array("Curso","em","Vídeo");
				echo "<br>";
				echo implode(" ", $v3);

			# JOIN
				echo "<br>";
				echo join(" ", $v3);

			# CHR
				#Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
				echo "<br>";
				$letra = chr(76);
				echo "$letra";

			# ORD
				#Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.
				echo "<br>";
				$chr = ord("L");
				echo "$chr";
			 ?>
		</code>
	</div>
	<footer>
		<button id="left"><a href="aulaphp-002.php">Voltar Página</a></button>
		<button id="right"><a href="aulaphp-003.php">Próxima Página</a></button>
	</footer>
</body>
</html>