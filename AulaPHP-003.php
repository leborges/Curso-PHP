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
					<legend>StringToLower</legend>
					<label for="cSTL">Texto:</label>
					<input type="text" name="tSTL" id="cSTL">
				</fieldset>
				<fieldset>
					<legend>StringToUpper</legend>
					<label for="cSTU">Texto:</label>
					<input type="text" name="tSTU" id="cSTU">
				</fieldset>
				<fieldset>
					<legend>UC First</legend>
					<label for="cUCF">Texto:</label>
					<input type="text" name="tUCF" id="cUCF">
				</fieldset>
				<fieldset>
					<legend>UC Words</legend>
					<label for="cUCW">Texto:</label>
					<input type="text" name="tUCW" id="cUCW">
				</fieldset>
				<fieldset>
					<legend>String Reverse</legend>
					<label for="cStrRev">Texto:</label>
					<input type="text" name="tStrRev" id="cStrRev">
				</fieldset>
				<fieldset>
					<legend>String POS</legend>
					<label for="cStrPos">Localizar:</label>
					<input type="text" name="tStrPos" id="cStrPos" style="width: 130px;">
				</fieldset>
				<fieldset>
					<legend>String iPOS</legend>
					<label for="cStrIPos">Localizar:</label>
					<input type="text" name="tStrIPos" id="cStrIPos" style="width: 130px;">
				</fieldset>
				<fieldset>
					<legend>Substring Count</legend>
					<label for="cStrCount">Contar:</label>
					<input type="text" name="tStrCount" id="cStrCount" style="width: 130px;">
				</fieldset>
				<fieldset>
					<legend>Substring</legend>
					<label for="cSubStrt">Inicio:</label>
					<input type="number" name="tSubStrt" id="cSubStrt" style="width: 130px;" value="<?php echo (isset($_GET['tSubStrt'])?$_GET['tSubStrt']:"-3") ?>" minlength="-29" maxlength="29">
					<label for="cSubEnd">Fim:</label>
					<input type="number" name="tSubEnd" id="cSubEnd" style="width: 130px;" value="<?php echo (isset($_GET['tSubEnd'])?$_GET['tSubEnd']:"3") ?>" minlength="-29" maxlength="29">
				</fieldset>
			</fieldset>
			<button type="submit">Enviar</button>
		</form>
	</div>
	<div class="conteudo">
		<p class="fonte">Aula - Funções String</p>
		<code>
			<?php 
			# StringToLower
				# Altera todas letras que estiverem em maiúsculas para minúsculas
				echo "<span style='color: white'># StringToLower</span><br>";

				$stl = empty($_GET['tSTL'])?"LeonArdO":$_GET['tSTL'];
				echo "> Recebi $stl e ficou como ".strtolower($stl);

			# StringToUpper
				# Altera todas letras que estiverem em minúsculas para maiúsculas
				echo "<br><span style='color: white'># StringToUpper</span><br>";

				$stu = empty($_GET['tSTU'])?"LeonArdO":$_GET['tSTU'];
				echo "> Recebi $stu e ficou como ".strtoupper($stu);
			
			# UC First
				# Coloca a primeira letra em maiúscula
				echo "<br><span style='color: white'># UC First</span><br>";

				$ucf = empty($_GET['tUCF'])?"leonardo borges":$_GET['tUCF'];
				echo "> Recebi $ucf e ficou como ".ucfirst($ucf);

			# UC Words
				# Coloca a primeira letra em maiúscula de cada palavra
				echo "<br><span style='color: white'># UC Words</span><br>";

				$ucw = empty($_GET['tUCW'])?"leonardo borges":$_GET['tUCW'];
				echo "> Recebi $ucw e ficou como ".ucwords($ucw);
			
			# String Reverse
				# Reescreve a palavra ao contrário
				echo "<br><span style='color: white'># String Reverse</span><br>";

				$srev = empty($_GET['tStrRev'])?"Leonardo Borges":$_GET['tStrRev'];
				echo "> Recebi $srev e ficou como ".strrev($srev);
			
			# String POS
				# Localiza a palavra/caracter desejado e retorna sua posição[Considerando CASE]
				echo "<br><span style='color: white'># String POS</span><br>";

				$frase = "Eu vou estudar PHP";
				$spos = empty($_GET['tStrPos'])?"PHP":$_GET['tStrPos'];
				echo "> $frase<br>> A palavra [$spos] está na posição: ".strpos($frase, $spos);
			
			# String iPOS
				# Localiza a palavra/caracter desejado e retorna sua posição[Desconsiderando CASE]
				echo "<br><span style='color: white'># String iPOS</span><br>";

				$sipos = empty($_GET['tStrIPos'])?"php":$_GET['tStrIPos'];
				echo "> $frase<br>> A palavra [$sipos] está na posição: ".stripos($frase, $sipos);
			
			# Substring Count
				# Conta quantas vezes a palavra é encontrada na frase
				echo "<br><span style='color: white'># Substring Count</span><br>";

				$frase2 = "Eu estudo PHP, eu aprendo PHP";
				$scount = empty($_GET['tStrCount'])?"PHP":$_GET['tStrCount'];
				echo "> $frase2<br>> A palavra [$scount] apareceu: ".substr_count($frase2, $scount)."x";
			
			# Substring
				# Pega um pedaço de uma string
				echo "<br><span style='color: white'># Substring</span><br>";

				$subStrt = empty($_GET['tSubStrt'])?"-3":$_GET['tSubStrt'];
				$subEnd = empty($_GET['tSubEnd'])?"3":$_GET['tSubEnd'];
				echo "> $frase2<br>> Nessa posição temos: ".substr($frase2, $subStrt, $subEnd);
			 ?>
		</code>
	</div>
	<footer>
		<button id="left"><a href="aulaphp-002.php">Voltar Página</a></button>
		<button id="right"><a href="aulaphp-004.php">Próxima Página</a></button>
	</footer>
</body>
</html>