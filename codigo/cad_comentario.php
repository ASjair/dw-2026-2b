<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

        <form action="salvar_usuario.php" method="POST">
            <input  type="text"     name="username">
            <input  type="text"     name="email">
            <input  type="text"     name="foto">

            <input type="submit"    value="Salvar">         
        </form>
        <select name="idpostagem">
    <?php
                require_once "conexao.php";

                $sql = "SELECT * FROM postagem";

                $resultados = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultados)) {
                    $idpostagem = $linha['idpostagem'];
                    $nome = $linha['nome'];
                    
                    echo "<option value='$idpostagem'>$nome</option>";
                }
            ?>
        </select>

         <select name="idusuario">
            <?php
                require_once "conexao.php";

                $sql = "SELECT * FROM usuario";

                $resultados = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultados)) {
                    $idusuario = $linha['idusuario'];
                    $nome = $linha['nome'];
                    
                    echo "<option value='$idusuario'>$nome</option>";
                }
            ?>
        </select>
    <a href="index.php">Cancelar</a>
</body>

</html>