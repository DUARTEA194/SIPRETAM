<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registro-SIPRETAM</title>
    <link rel="stylesheet" href="../estilos/EstiloLogin.css">
</head>
<header>
    <h1>SIPRETAM</h1>
</header>
<body>
    <main>
    <div class="contenedorGeneral"> <!--Contiene todos elementos de los formularios de login y registro-->
        <div class="cajaTrasera"><!--Muestra las opciones de login y registro-->
            <div class="cajaTraseraLogin"> <!--Contiene los mensajes del login -->
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesion para acceder al sistema</p>
                <button id="btnLogin">Iniciar sesion</button>
            </div>

            <div class="cajaTraseraRegistro"> <!--Contiene los mensajes de registro-->
                <h3>¿Aun no tienes una cuenta?</h3>
                <p>Registrate para acceder al sistema</p>
                <button id="btnRegistro">Registrarse</button>
            </div>
        </div>
        
        <div class="contenedorLoginRegistro"> <!--Almacena los formi¿ularios de login y registro-->
            
            <form action="" class="formularioLogin"> 
                <!--Formulario de login-->
                <h2>Iniciar sesion</h2>
                <input type="text" placeholder="Usuario">
                <input type="password" placeholder="contraseña">
                <button>Ingresar</button>
            </form>

            <form action="" class="formularioRegistro">
                <!--Formulario de registro-->  
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Apellido paterno">
                <input type="text" placeholder="Apellido materno">

                <div class="contenedorCuentaSemestre">
                    <input class="inputCuenta" type="text" placeholder="No. cuenta">
                    <input class="inputSemestre" type="text"placeholder="semestre"> <!--CAMBIAR POR UN LISTBOX-->
                </div>

                <input type="text" placeholder="Correo Institucional">
                <input type="text" placeholder="Facultad"> <!--CAMBIAR POR UN LISTBOX-->
                <input type="text"placeholder="Licenciatura"> <!--CAMBIAR POR UN LISTBOX-->
                <button class="btnRegistro">Registrarse</button>
            </form>
        </div>
    </div>
    </main>
    <script src="../js/Login.js"></script>
</body>
<footer><p>Sistema de prestamos del taller de maufactura - UAEMex</p></footer>
</html>