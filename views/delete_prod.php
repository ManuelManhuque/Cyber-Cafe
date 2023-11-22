
<?php
if (!empty($_GET['id'])) {
    // Incluir o arquivo de conexão
    include("../db/config.php");

    // Sanitize the input to prevent SQL injection
    $id =  $_GET['id'];

    // Select the user from the database
    $sqlSelect = "SELECT * FROM produto WHERE id =$id";

    $produto = $conn->query($sqlSelect);

    if ($produto ->num_rows > 0) {
        $sqlSelect = "DELETE FROM produto WHERE id =$id";
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