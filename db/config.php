<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '1234';
 $dbname = 'coffee_db';

 $conn = new mysqli($servername,  $username, $password, $dbname);

    // if($conexao-> connect_errno){ SERVE PARA TESTAR A CONEXAO DA BASE
    //         echo "Erro";
    // }

    // else{
    //     echo "Sucesso "; 
    // }

	// Create a connection to the database
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

