<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/ico/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" sizes="32x32" />
    <title>Login Sistema</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/index.css" rel="stylesheet"> 

</head>

<body class="text-center">
<div id="content-titulo">
    <h2 id="titulo">Sistema de Control Escolar</h2>
</div>
    <div class="login-box">
       <div id="avatar">
           <img src="assets/img/avat.png" alt="">
       </div>
        <form method="POST" name="form-signin" id="form-signin" action="dash.php">
            <div class="user-box">
                <input type="text" name="loginUser" id="loginUser" maxlength="20" autocomplete="off" placeholder="Escribe tu usuario" required>
                <span class="icon-form"><i class="fa fa-user"> Usuario</i></span>
            </div>

            <div id="espacio"></div>

            <div class="user-box">
                <input type="password" name="loginPwd" id="loginPwd" maxlength="10" autocomplete="off" placeholder="Escribe tu contraseña">
                <span class="icon-form"><i class="fa fa-key"> Contraseña</i></span>
                <span class="btn-show-pwd">
                    <i class="fa fa-eye" id="show" aria-hidden="true" onclick="show()"></i>
                    <i class="fa fa-eye-slash" id="hide" aria-hidden="true" onclick="show()" style="display:none"></i>
                </span>
            </div>

            <div id="msgSection">
                <span id="msgLogin"></span>
            </div>
            <button id="loginBtn" type="submit">Entrar</button>

        </form>

    </div>

    <!-- JavaScript Files -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="components/bootstrap/js/bootstrap.min.js"></script>
    <script src="components/jqueryValidation/jquery.validate.js"></script>

    <!-- Custom JavaScript -->
    <script>
        //funcion mostrar-ocultar contraseña
        function show() {
            let pwdContent = document.getElementById("loginPwd");
            let icon = document.getElementById("show");
            let iconSlash = document.getElementById("hide");

            if(pwdContent.type === "password"){
                pwdContent.type = "text";
                icon.style.display = 'none';
                iconSlash.style.display = 'inline'
            }else{
                pwdContent.type = "password";
                icon.style.display = 'inline';
                iconSlash.style.display = 'none'
            }
        }
        //funcion validar ingreso 
        $().ready(function() {
            $("#form-signin").validate({
                rules: {
                    loginUser: {
                        required: true
                    },
                    loginPwd: {
                        required: true,
                        minlength: 7
                    }
                },
                messages: {
                    loginUser: {
                        required: "Ingrese su usuario"
                    },
                    loginPwd: {
                        required: "Ingrese su contraseña",
                        minlength: "La contraseña es de, al menos, 7 caracteres"
                    }
                }
            });
        });
    </script>

</body>

</html>