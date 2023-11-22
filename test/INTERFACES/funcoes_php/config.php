<?php
 $dbHost = 'Localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = 'cafe';

 $conexao = new mysqli($dbHost,  $dbUsername, $dbPassword,  $dbName);

    // if($conexao-> connect_errno){ SERVE PARA TESTAR A CONEXAO DA BASE
    //         echo "Erro";
    // }

    // else{
    //     echo "Sucesso "; 
    // }
?>

