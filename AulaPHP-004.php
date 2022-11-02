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
				<legend>Aula - Funções String</legend>
				<fieldset>
					<legend>String PAD</legend>
					<label for="cStrPad">Texto:</label>
					<input type="text" name="tStrPad" id="cStrPad" value="<?php echo (isset($_GET['tStrPad'])?$_GET['tStrPad']:"") ?>">
					<!-- <label for="cStrAtt">Posição:</label>
					<select style="font-size: 10pt; width: 164px; padding: 2px" name="tStrAtt" id="cStrAtt">
						<optgroup>
							<option value="STR_PAD_BOTH">CENTER</option>
							<option value="STR_PAD_RIGHT">RIGHT</option>
							<option value="STR_PAD_LEFT">LEFT</option>
						</optgroup>
					</select><br> -->
					<label>Num. de caracteres:</label>
					<input type="number" name="tStrNum" id="cStrNum" style="width: 72px;" value="<?php echo (isset($_GET['tStrNum'])?$_GET['tStrNum']:"") ?>">
				</fieldset>
				<fieldset>
					<legend>String Repeat</legend>
					<label for="cStrRep">Texto:</label>
					<input type="text" name="tStrRep" id="cStrRep" value="<?php echo (isset($_GET['tStrRep'])?$_GET['tStrRep']:"") ?>">
					<label>Quantidade:</label>
					<input type="number" name="tStrRepNum" id="cStrRepNum" style="width: 100px" value="<?php echo (isset($_GET['tStrRepNum'])?$_GET['tStrRepNum']:"") ?>">
				</fieldset>
				<fieldset>
					<legend>String Replace</legend>
					<label for="cReplace">Substituir:</label>
					<input type="text" name="tReplace" id="cReplace" style="width:130px;" value="<?php echo (isset($_GET['tReplace'])?$_GET['tReplace']:"") ?>">
					<label for="cReplaceBy">Por:</label>
					<input type="text" name="tReplaceBy" id="cReplaceBy" style="width:130px;" value="<?php echo (isset($_GET['tReplaceBy'])?$_GET['tReplaceBy']:"") ?>">
				</fieldset>
			</fieldset>
			<button type="submit">Enviar</button>
		</form>
	</div>
	<div class="conteudo">
		<p class="fonte">Aula - Funções String</p>
		<code>
			<?php 
			# String PAD
				# Complementa os caracteres de uma string
				echo "<br><span style='color: white'># String PAD</span><br>";

				$padTxt = empty($_GET['tStrPad'])?"Leonardo":$_GET['tStrPad'];
				// $padAtt = empty($_GET['tStrAtt'])?STR_PAD_BOTH:$_GET['tStrAtt'];
				$padNum = empty($_GET['tStrNum'])?"30":$_GET['tStrNum'];
				echo "> ".str_pad($padTxt, $padNum, ".", STR_PAD_BOTH);

			# String Repeat
				# Repete a string uma quantidade x de vezes
				echo "<br><span style='color: white'># String Repeat</span><br>";

				$srep = empty($_GET['tStrRep'])?"-":$_GET['tStrRep'];
				$srepNum = empty($_GET['tStrRepNum'])?"40":$_GET['tStrRepNum'];
				echo "> ".str_repeat($srep, $srepNum);
			
			# String Replace
			# String iReplace
				# Utilizada para substituir uma palabra por outra
				# Quando colocado 'i' na frente do replace ele passa a desconsiderar os CASES
				echo "<br><span style='color: white'># String Replace</span><br>";

				$frase = "Eu gosto de java e faço curso de java.";
				$replace = empty($_GET['tReplace'])?"Java":$_GET['tReplace'];
				$replaceby = empty($_GET['tReplaceBy'])?"PHP":$_GET['tReplaceBy'];
				echo "> A frase era:<br>$frase";
				echo "<br>	> E a frase ficou como:<br>".str_ireplace($replace, $replaceby, $frase);
			
			
			 ?>
		</code>
		<p class="fonte">Aula - Vetores e Matrizes</p>
		<code>
				<?php 
				# Criando um vetor
				echo "<span style='color: white'># Criando um vetor</span><br>";
					$n = array(1,2,3);
					$n[3] = 4;
					$n[4] = 5;
					$n[5] = 6;

					foreach ($n as $key => $value) {
						echo "[$key]→$value ";
					}

				# Range
					# Alimentando meu vetor
					echo "<br><span style='color: white'># Alimentando um vetor</span><br>";
					$v = range(5,20,5);

					foreach ($v as $key => $value) {
						echo "[$key]→$value ";
					}

				# Unset
					# Utilizado para desalocar uma posição do vetor, já ajustando o indice
					echo "<br><span style='color: white'># Uso do unset</span><br>";
					unset($n[0]);

					foreach ($n as $key => $value) {
						echo "[$key]→$value ";
					}

				# Vetor de pessoa
					echo "<br><span style='color: white'># Vetor de pessoa</span><br>";
					$pessoa = array("nome" => "Leonardo","idade" => 23,"sexo" => "Masculino");

					foreach ($pessoa as $k => $valor) {
						echo "[$k]→$valor ";
					}

				# Matrizes
					echo "<br><span style='color: white'># Criando matriz</span><br>";
					$matriz = array(array(1,2),array(3,4),array(5,6));
					$matriz[0][0] = 7;
					
					foreach ($matriz as $i => $value) {
						foreach ($value as $k => $v) {
							echo "[$v]";
						}
						echo "→ Array $i<br>";
					}
				
				# Array Push [Pilha / Stack]
					echo "<span style='color: white'># Array Push</span><br>";
					$v2 = array(1,2,3);
					array_push($v2, 4);

					foreach ($v2 as $key => $value) {
						echo "[$key]→$value ";
					}
				# Array Pop [Pilha / Stack]
					echo "<br><span style='color: white'># Array Pop</span><br>";
					array_pop($v2);

					foreach ($v2 as $key => $value) {
						echo "[$key]→$value ";
					}
				# Array Unshift [Fila / ]
					echo "<br><span style='color: white'># Array Unshift</span><br>";
					array_unshift($v2, 10);

					foreach ($v2 as $key => $value) {
						echo "[$key]→$value ";
					}
				
				# Array Shift [Fila / ]
					echo "<br><span style='color: white'># Array Shift</span><br>";
					array_shift($v2);

					foreach ($v2 as $key => $value) {
						echo "[$key]→$value ";
					}

				# Sort / rSort [Reverse] / aSort [Associativo] Mantendo o indices / arSort [Associativo e Reverse] / kSort [Ordenar indices] / krSort [Ordenar indices e Reverse]
					echo "<br><span style='color: white'># Sort</span><br>";

					$v3 = array(4,6,2,7,1,3);
					foreach ($v3 as $key => $value) {
						echo "[$key]→$value ";
					}
					echo "<br>";
					sort($v3);
					foreach ($v3 as $key => $value) {
						echo "[$key]→$value ";
					}
				 ?>
		</code>
	</div>
	<footer>
		<button id="left"><a href="aulaphp-002.php">Voltar Página</a></button>
	</footer>
</body>
</html>