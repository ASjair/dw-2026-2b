<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div>
        <form action="salvar_usuario.php" method="POST">
            <p>Username</p><input  type="text" name="username">
            <p>Nome</p><input  type="text" name="nome">
            <p>Email</p><input  type="email" name="email">
            <p>Senha</p><input  type="password" name="senha">
            <p>Foto</p><input  type="text" name="foto">

            <input type="submit" value="Salvar">
        </select>            
        </form>
    </div>
    <a href="index.php">Cancelar</a>
</body>

</html>