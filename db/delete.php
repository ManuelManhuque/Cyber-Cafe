
// if (!empty($_GET['id'])) {
//     // Incluir o arquivo de conexão
//     include("../db/config.php");

//     // Sanitize the input to prevent SQL injection
//     $id = mysqli_real_escape_string($conn, $_GET['id']);

//     // Select the user from the database
//     $sqlSelect = "SELECT * FROM users WHERE id ='$id'";
//     $result = $conn->query($sqlSelect);

//     if ($result && $result->num_rows > 0) {
//         // Se o usuário existir, exclua-o
//         $sqlDelete = "DELETE FROM users WHERE id ='$id'";
//         $resultDelete = $conn->query($sqlDelete);

//         if ($resultDelete) {
//             // Exclusão bem-sucedida
//             header("../views/_users.php");
//         } else {
//             // Se houver um erro ao excluir o usuário
//             echo "Erro ao excluir o usuário: " . $conn->error;
//         }
//     } else {
//         // Se o usuário não existir
//         echo "Usuário não encontrado.";
//     }

//     // Feche a conexão com o banco de dados após o uso
//     $conn->close();
// } else {
//     // Redirecionar se o parâmetro 'id' estiver ausente
//     header("Location: ../views/_users.php");
// }







<?php
if (!empty($_GET['id'])) {
    // Incluir o arquivo de conexão
    include("config.php");

    // Sanitize the input to prevent SQL injection
    $id =  $_GET['id'];

    // Select the user from the database
    $sqlSelect = "SELECT * FROM users WHERE id =$id";

    $result = $conn->query($sqlSelect);

    if ($result ->num_rows > 0) {
        $sqlSelect = "DELETE FROM users WHERE id =$id";
        $resultDelete = $conn->query($sqlSelect);

        // while ($user_data = mysqli_fetch_assoc($result)){
            
            // $nome = $user_data['name'];
            // $email = $user_data['email'];
            // $password = $user_data['password'];
            // $credcardnum = $user_data['credcardnum'];
            // $usertype = $user_data['usertype'];
            // $category = $user_data['category'];
            // $startdatemembership = $user_data['startdatemembership'];
    // }   
}
}
header ('Location: _users.php')
?>




