<?php
    include "conexao.php";

	$consulta = $conexao->query("SELECT id, title, start, ends as end, true as overlap, '#78D7A7' as color FROM eventos;"); 

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
        $vetor[] = $linha;
     }

    echo json_encode($vetor);
    
?>
