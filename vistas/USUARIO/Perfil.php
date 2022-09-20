<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil-SIPRETAM</title>
    <!--Importacion de las hojas de estilo-->
    <link rel="stylesheet" href="../../estilos/EstiloGeneral.css">
    <link rel="stylesheet" href="../../estilos/EstiloPerfil.css">
    <!--Importacion de Fontawesome para el uso de iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
  <!--LLamado del header -->
    <div>
      <?php require("../../Layoud/MenuLateral.php")?>
    </div>    
    <div class="contenedorPerfil">
        <!-- Seccion del contenedor-->
        <div class="contenedorPerfilPrincipal">
            <img  class="fotoUsuario" src="../../imagenes/fotoUsuario.jpeg" alt="">
            <div class="contenedorNombre">
              <label class="NombreUsuario">Antonio Duarte Clemente</label>    
              <label class="NoCuenta">1860670</label>
            </div>
            
        </div>
        <div class="contenedorPerfilSecundario">
            <table class="tablaInformacionUsuario">
                <tbody>
                  <tr>
                    <td>Dependencia:</td>
                    <td><label class="labelDatos">Facultad de Ingeniería</label></td>
                  </tr>
                  <tr>
                    <td>Programa de estudios:</td>
                    <td> <label class="labelDatos">Ingeniería en Computación</label></td>
                  </tr>
                     <tr>
                         <tr>
                    <td>Correo institucional:</td>
                    <td><label class="labelDatos">aduartec003@alumno.uaemex.mx</label></td>
                  </tr>
                    <tr>
                    <td>Correo personal:</td>
                    <td><label class="labelDatos">duarteaa194@gmail.com</label></td>
                  </tr>
                  <tr>
                    <td>Numero de telefono:</td>
                    <td> <label class="labelDatos">7226108584</label></td>
                  </tr>
                  <tr>
                    <td>Semestre:</td>
                    <td> <label class="labelDatos"> 9no semestre</label></td>
                  </tr>           
                </tbody>
              </table>
        </div>


    </div>
</body>
</html>