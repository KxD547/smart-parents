<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Smart Parents</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Conecta la fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Conecta la fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Conecta la fuente -->
</head>
<body>
    <div class="login_card">
        <div class="card_content">
            <h1 class="card_title">INICIAR SESIÓN</h1>
            <div class="card_form">
                <form action="../actions/login.php" method="post" class="form">
                    <div class="form__user">
                        <label for="user">Numero de documento</label>
                        <input type="text" name="user" required>
                    </div>
                    <div class="form__password">
                        <label for="password">Contraseña</label>
                        <input type="password" name="pass" required>
                    </div>
                    <div class="form__submit">
                        <input type="submit" name="submit_btn" value="Ingresar" required>
                        <a href="../index.php">Regresar</a>
                    </div>
                </form>
            </div>
            <div class="card_btn_login"></div>
        </div>
    </div>
</body>
</html>