<?php 
        include "conexao.php";
                            
        $nome = $_POST["nome"];
        $data = $_POST["data"] . "T" . $_POST["inicio"] . ":00";
        $ends = $_POST["data_fim"] . "T" . $_POST["fim"] . ":00";
		
		if (trim($ends) != "") {
			$query = "INSERT INTO eventos (id, title, start, ends) VALUES (0, '$nome', '$data', '$ends')";
		} else {
			$query = "INSERT INTO eventos (id, title, start) VALUES (0, '$nome', '$data')";
		}
        
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
		
?>



