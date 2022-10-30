<!DOCTYPE html>
<html>
<head>
	<?php 
		$texto = isset($_GET['tTexto'])?$_GET['tTexto']:"[Texto não informado]";
		$tamanho = isset($_GET['tTam'])?$_GET['tTam']:"10pt";
		$cor = isset($_GET['tCor'])?$_GET['tCor']:"red";
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Testando php</title>
	<style type="text/css">
		span.texto {
			font-size: <?php echo $tamanho; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
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
				<label>Tabuado do:</label>
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
						<option value="10">10</option>
					</optgroup>
				</select>
			</fieldset>
			<fieldset>
				<legend>Aula - For</legend>

			</fieldset>
			<button type="submit">Enviar</button>
		</form>
	</div>
	<div class="conteudo">
		<p class="fonte">Aula - While</p>
		<code>
			<?php 
				$n1 = isset($_GET['tN1'])?$_GET['tN1']:"1";
				$n2 = isset($_GET['tN2'])?$_GET['tN2']:"10";
				$c = isset($_GET['tIncremento'])?$_GET['tIncremento']:"1";
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

				$tab = isset($_GET['tTabuada'])?$_GET['tTabuada']:"10";
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
	</div>
	<footer>
		<button id="left"><a href="aulaphp-001.php">Voltar Página</a></button>
		<button id="right"><a href="aulaphp-002.php">Próxima Página</a></button>
	</footer>
</body>
</html>