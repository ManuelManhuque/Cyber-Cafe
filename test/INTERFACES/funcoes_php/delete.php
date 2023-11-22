<?php
if (!empty($_GET['id'])) {
    // Incluir o arquivo de conexão
    include("../../INTERFACES/funcoes_php/config.php");

    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conexao, $_GET['id']);

    // Select the user from the database
    $sqlSelect = "SELECT * FROM usuarios WHERE id ='$id'";
    $result = $conexao->query($sqlSelect);

    if ($result && $result->num_rows > 0) {
        // Se o usuário existir, exclua-o
        $sqlDelete = "DELETE FROM usuarios WHERE id ='$id'";
        $resultDelete = $conexao->query($sqlDelete);

        if ($resultDelete) {
            // Exclusão bem-sucedida
            header("Location: INTERFACES/ADM/USUARIOS.php");
        } else {
            // Se houver um erro ao excluir o usuário
            echo "Erro ao excluir o usuário: " . $conn->error;
        }
    } else {
        // Se o usuário não existir
        echo "Usuário não encontrado.";
    }

    // Feche a conexão com o banco de dados após o uso
    $conexao->close();
} else {
    // Redirecionar se o parâmetro 'id' estiver ausente
    header("Location: INTERFACES/ADM/USUARIOS.php");
}
?>
