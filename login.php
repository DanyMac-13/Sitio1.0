<?php
// Iniciar la sesión
session_start();

// Se comprueba si el usuario ya ha iniciado sesión; en caso afirmativo, rediríjalo a la página de bienvenida
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: Home.php");
    exit;
}

// Se incluye el archivo de configuración
require_once "config.php";

// Definir variables e inicializar con valores vacíos
$username = $password = "";
$username_err = $password_err = "";

// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Comprobar si el nombre de usuario esta vacío
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor ingrese su usuario.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Comprobar si la contraseña esta vacía
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor ingrese su contraseña.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar credenciales
    if (empty($username_err) && empty($password_err)) {
        
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
            // preparar una selectcion de declración
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Establecer parametros
            $param_username = $username;

            // Ejecutar la declaracion preparada
            if (mysqli_stmt_execute($stmt)) {
                // Guardar los resultados
                mysqli_stmt_store_result($stmt);

                // Verificar si existe el nombre de suario y si es asi, verificar la contraseña
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // vincular las variables de resultado
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // la contraseña es correcta, inicie una nueva sesion
                            session_start();

                            // almacenar datos en variables de sesion
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Rediregir al usuario a la pagina Home
                            header("location: Home.php");
                        } else {
                            // Mostrar un mensaje de error si la contraseña no es valida
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else {
                    // Mostrar un mensaje de error si el usiario no existe
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else {
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }

        // Cerrar declaracion
        mysqli_stmt_close($stmt);
    }

    // Cerrar conexion
    mysqli_close($link);
}
?>


<!--  Codigo html para mostrar la pagina de login-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>

<link rel="icon" type="image/png" href="img/user.png">
</head>

<body style="background-color:#148991;">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div align="center">
                    <i class="fa fa-user" style="font-size: 140px; color: black"></i>
                </div>
                <p></p>

                <div class="wrapper">
                    <center>
                        <h2>INICIO DE SESIÓN</h2>
                        <p>Por favor, complete sus credenciales para iniciar sesión.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    </center>
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Usuario</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <center>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Ingresar">
                            <a button type="button" class="btn btn-danger" href="index.php">Cancelar</a>
                        </div>
                        <p>¿No tienes una cuenta? <a href="register.php">
                                <FONT COLOR="navy">Regístrate ahora</FONT>
                            </a>.</p>
                        <p>¿Olvidaste tu contraseña? <a href="passRecover.php">
                                <FONT COLOR="navy">Recuperar contraseña</FONT>
                            </a>.</p>
                    </center>

                    </form>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

</body>

</html>