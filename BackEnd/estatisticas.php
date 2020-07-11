<?php
$cod_msg = 0;
$cod_msg = $_GET["cod_msg"];
?>

<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">

<?php 
include 'funcoes.php';
cod_msg($cod_msg);
?>

<?php
include 'cabecalho.php';
?>
 
<?php
include 'menu_principal.php';
?>

<?php

$num_partidos = busca_num_partidos();
$num_votos_urna_virtual = busca_num_votos_urna_virtual();
$num_votos_urna_fisica = busca_num_votos_urna_fisica();
$num_eleitores_virtuais = busca_num_eleitores_virtuais();

?>

<div class="jumbotron">
    <a href="#">Nº Partidos <span class="badge"><?php echo $num_partidos;?></span></a><br>
    <a href="#">Nº Votos em Urna Virtual (on-line) <span class="badge"><?php echo $num_votos_urna_virtual;?></span></a><br>	
    <a href="#">Nº Votos em Urna Física <span class="badge"><?php echo $num_votos_urna_fisica;?></span></a><br>	
    <a href="#">Nº Eleitores Virtuais <span class="badge"><?php echo $num_eleitores_virtuais;?></span></a><br>				
	
</div>

<?php
include 'rodape.php';
?>
  
</div>

</body>

</html>