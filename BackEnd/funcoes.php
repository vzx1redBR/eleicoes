<?php

function cod_msg(int $cod_msg){
	
	switch ($cod_msg){
		
		case 0:
			echo "<div class='alert alert-info alert-dismissible'>";
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<strong>OK!</strong> Sistemas em Funcionamento Regular!";
			echo "</div>";
			break;
		
		case 1:
			echo "<div class='alert alert-success alert-dismissible'>";
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<strong>Successo!</strong> Partido Inserido com Successo.";
			echo "</div>";
			break;
			
		case 2:
			echo "<div class='alert alert-danger alert-dismissible'>";
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<strong>Successo!</strong> Partido Removido com Successo.";
			echo "</div>";	
			break;
			
		case 3:
			echo "<div class='alert alert-warning alert-dismissible'>";
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<strong>Successo!</strong> Partido Atualizado com Successo.";
			echo "</div>";	
			break;
			
		case 4:
			echo "<div class='alert alert-success alert-dismissible'>";
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<strong>Successo!</strong> Voto Registado!";
			echo "</div>";	
			break;
			
		case 5:
			echo "<div class='alert alert-danger alert-dismissible'>";
				echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				echo "<strong>Erro!</strong> Eleitor j? votou!";
			echo "</div>";	
			break;
		
	}
	
}

function busca_num_partidos(){
	
	$num_partidos = 0;
	
	include 'liga_bd.php';
	
	$sql = "SELECT count(*) AS contaPartidos FROM partido";
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	$num_partidos = $row["contaPartidos"];
	
	$conn->close();
	
	return $num_partidos;
}

function busca_num_votos_urna_virtual(){
	
	$num_votos = 0;
	$tipo_voto = 1;
	
	include 'liga_bd.php';
	
	$sql = "SELECT count(*) AS contaVotos FROM eleitor where tipo_voto = $tipo_voto";
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	$num_votos = $row["contaVotos"];
	
	$conn->close();
	
	return $num_votos;
}

function busca_num_votos_urna_fisica(){
	
	$num_votos = 0;
	$tipo_voto = 2;
	
	include 'liga_bd.php';
	
	$sql = "SELECT count(*) AS contaVotos FROM eleitor WHERE tipo_voto = $tipo_voto";
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	$num_votos = $row["contaVotos"];
	
	$conn->close();
	
	return $num_votos;
}

function busca_num_eleitores_virtuais(){
	
	$num_eleitores = 0;
	
	include 'liga_bd.php';
	
	$sql = "SELECT count(*) AS contaEleitores FROM eleitor";
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	$num_eleitores = $row["contaEleitores"];
	
	$conn->close();
	
	return $num_eleitores;
}

?>