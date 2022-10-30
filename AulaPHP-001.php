<!DOCTYPE html>
<html>
<head>
	<?php 
		$texto = $_GET['tTexto'];
		$tamanho = $_GET['tTam'];
		$cor = $_GET['tCor'];
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
	<div class="formulario" id="formulario">
		<form method="get" autocomplete="off">
			<fieldset>
				<legend>Aula - Variaveis</legend>
				<label for="cNome">Nome:</label>
				<input type="text" name="tNome" id="cNome"><br>
				<label for="cIdade">Idade:</label>
				<input type="number" name="tIdade" id="cIdade">
			</fieldset>
			<fieldset>
				<legend>Aula - Operadores Aritmético</legend>
				<label for="cN1">Número 1:</label>
				<input type="number" name="tN1" id="cN1">
				<label for="cN2">Número 2:</label>
				<input type="number" name="tN2" id="cN2">
			</fieldset>
			<fieldset>
				<legend>Aula - Operadores de Atribuição</legend>
				<label for="cPreco">Preço:</label>
				<input type="float" name="tPreco" id="cPreco">
			</fieldset>
			<fieldset>
				<legend>Aula - Operadores de Relacionais</legend>
				<label for="cAno">Ano de nascimento:</label>
				<input type="number" name="tAno" id="cAno" style="width: 100px;" max="2022" min="1900">
			</fieldset>
			<fieldset>
				<legend>Aula - HTML5 e PHP</legend>
				<label for="cTexto">Texto:</label>
				<input type="text" name="tTexto" id="cTexto"><br>
				<label for="cTam">Tamanho:</label>
				<select name="tTam" id="cTam">
					<optgroup>
						<option value="8pt">8</option>
						<option value="10pt">10</option>
						<option value="12pt">12</option>
						<option value="20pt">20</option>
						<option value="35pt">35</option>
					</optgroup>
				</select><br>
				<label for="cCor">Cor:</label>
				<input type="color" name="tCor" id="cCor" style="width: 177px;"><br>
			</fieldset>
			<button type="submit">Enviar</button>
		</form>
	</div>
	<div class="conteudo">
		<p class="fonte">Aula - Variaveis</p>
		<code>	
			<?php 
				$nome = isset($_GET['tNome'])?$_GET['tNome']:"[N/D]";
				$idade = isset($_GET['tIdade'])?$_GET['tIdade']:"0";
				echo "> ".$nome." tem ".$idade." anos.";
			 ?>
		</code>
		<p class="fonte">Aula - Operadores Aritmético</p>
		<code>
			<?php 
				$n1 = isset($_GET['tN1'])?$_GET['tN1']:"1";
				$n2 = isset($_GET['tN2'])?$_GET['tN2']:"1";
				$soma = $n1 + $n2;

				echo "> [Soma] $n1 + $n2 = ".$soma;
				echo "<br/>> [Subtração] de $n1 - $n2 = " . ($n1-$n2);
				echo "<br/>> [Multiplicação] de $n1 x $n2 = " . ($n1*$n2);
				echo "<br/>> [Divisão] de $n1 / $n2 = " . ($n1/$n2);
				echo "<br/>> [Módulo] de $n1 % $n2 = " . ($n1%$n2);
				echo "<br/>> [Média] de ($n1 + $n2)/2 = " . (($n1+$n2)/2);
				echo "<br/>> [Potência] de $n1<sup>$n2</sup> = " . pow($n1, $n2);
				echo "<br/>> [Absoluto] de $n2 = " . abs($n2);
				echo "<br/>> [Raiz] de $n1 = " . sqrt($n1);
				# Outras funções para arredondar CEIL e FLOOR
				echo "<br/>> [Arredondado] de $n1 / $n2 = " . round($n1/$n2);
				echo "<br/>> [Parte Inteira] de $n1 / $n2 = " . intval($n1/$n2);
				echo "<br/>> [Number Format] valor de R$ " . number_format(5243,2,',','.');
			 ?>
		</code>
		<p class="fonte">Aula - Operadores de Atribuição</p>
		<code>
			<?php 
				$preco = isset($_GET['tPreco'])?$_GET['tPreco']:"0";
				echo "> O preço desse produto é R$ ".number_format($preco,2,',','.');
				
				$preco += $preco*0.1;
				echo "<br/>> E o novo preço com 10% de aumento será R$ ".number_format($preco,2,',','.');
				
				$preco = isset($_GET['tPreco'])?$_GET['tPreco']:"0";
				$preco -= $preco*0.1;
				echo "<br/>> E o novo preço com 10% de desconto será R$ ".number_format($preco,2,',','.');

				#Referenciado variaveis
				$a = 3;
				$b = &$a;
				echo '<br/><span style="color: white">Referenciando duas variaveis <b>a = 3</b> e <b>b = &$a</b></span>';
				$a = 5;
				echo "<br/>> Alterando a=$a a variavel automaticamente b=$b";

				#Variaveis de variaveis
				echo "<br/><span style='color: white'>Variaveis de variaveis</span>";
				$site = "cursoemvideo";
				$$site = "cursoPHP";
				echo "<br/>> $site e $cursoemvideo";
			 ?>
		</code>
		<p class="fonte">Aula - Operadores de Relacionais</p>
		<code>
			<?php 
				$x = 7;
				$y = "7";
				$r = (($x===$y)?"SIM":"NÃO");
				echo "> Problema com a resposta do operador ternário: ".$r;

				$ano = isset($_GET['tAno'])?$_GET['tAno']:"0";
				$idade2 = 2022 - $ano;
				echo "<br>> Quem nasceu em ".$ano." tem ".$idade2." anos.";
				$voto = ($idade2>=18 && $idade2<65)?"é OBRIGATORIO":"NAO É OBRIGATORIO";
				echo "<br>> E seu voto ".$voto;
			 ?>
		</code>
		<p class="fonte">Aula - HTML5 e PHP</p>
		<code>
			<?php 
				echo "<span class=texto>$texto</span>";
			 ?>
		</code>
	</div>
</body>
</html>