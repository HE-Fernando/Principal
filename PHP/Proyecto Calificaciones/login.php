<html>  
    <head>
        <title> 
            Autentificador de usuario
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="z_estilo.css">
    </head>
    <style>
        body{
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .login-box{
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.15);
            width: 300px;
            text-align: center;
        }
        .login-box h2{
            margin-bottom: 20px;
            color: #333;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }
        .login-box input{
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        .login-box button{
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-box button:hover{
            background-color: #0056b3;
        }
    </style>
    <body>  
        <div class="login-box">
            <h2>Iniciar Sesión</h2>   
            <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] === "usuario"){
                    echo '<p style="color:red; text-align:center;">Usuario no encontrado</p>';
                }elseif ($_GET["error"] === "contraseña"){
                    echo '<p style="color:red; text-align:center;">Contraseña incorrecta</p>';
                }
            }
            ?>
            <form action="loginlogica.php" method="POST">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </body>
</html>