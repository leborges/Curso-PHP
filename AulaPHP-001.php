<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Testando php</title>
</head>
<body>
	<header id="cabecalho">
		<h1 class="fonte">Começando a testar comandos em PHP</h1>
	</header>
	<div class="conteudo">
		<p class="fonte">Aula - Variaveis</p>
		<code>	
			<?php 
				$nome = "Leonardo";
				$idade = 23;
				echo "> ".$nome." tem ".$idade." anos.";
			 ?>
		</code>
		<p class="fonte">Aula - Operadores Aritmético</p>
		<code>
			<?php 
				$n1 = $_GET['a'];
				$n2 = $_GET['b'];
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
	</div>
</body>
</html>