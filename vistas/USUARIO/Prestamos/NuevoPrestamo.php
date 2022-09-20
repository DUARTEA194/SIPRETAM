<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Prestamo-SIPRETAM</title>
    <!--Importacion de las hojas de estilo-->
    <link rel="stylesheet" href="../../../estilos/EstiloGeneral.css">
    <link rel="stylesheet" href="../../../estilos/EstiloPrestamo.css">
    <!--Importacion de Fontawesome para el uso de iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<header>
    <!--LLamado del header -->
    <?php require("../../../Layoud/Header.php")?>
</header>
<body>
    <!--LLamado del header -->
    <div>
      <?php require("../../../Layoud/MenuLateral.php")?>
    </div> 
    <div class="contenedorGeneral">
        <h1>SOLICITUD DE ACCESO AL TALLER MECANICO</h1>
        <div class="contenedorFormularioSolicitud">
        <!--Contenedor del fomulario de solicitud de prestamo-->
            <div class="cabeceraFormulario">
                <h3>Solicitud en el periodo 2022B</h3>
            </div>
            <div class="bodyFormulario"> <!--Cuerpo del formulario-->
                <div class="bodyFormularioSeccion" >   <!--Primera Parte del formulario de solicitud-->
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Usuario:</strong></td>
                                <td "><label class="inputDatos">Antonio Duarte Clemente</label></td> <!--Obtencion del nombre del usuario-->
                                <td><strong>fecha:</strong></td>
                                <td> <label class="inputDatos"><?php echo date("d"). " de " .date("m"). " del " .date("y"); ?></label></td> <!--La fecha actua es la misma que la fecha de solicitud-->
                            </tr>
                            <tr>
                                <td><strong>Correo Institucional:</strong></td>
                                <td><label class="inputDatos" >duarteac003@alumno.uaemex.mx</label></td>
                            </tr>
                            <tr>
                                <td><strong>No.De Cuenta</strong></td>
                                <td class="TableInput"><label class="inputDatos">1860670</label></td>
                            </tr>
                            <tr>
                                <td><strong>Fecha:</strong></td>
                                <td> <!-- Seleccio de la fecha programada -->
                                    <input type="date" id="calendario" value="2022-07-22" min="2018-01-01" max="2018-12-31"> <!--El calendario debe de mostrar como fecha inicial la facha actual.Como minimo: La fecha de arranque de semestre y como Final la fecha de termino de semestre-->
                                </td>
                                <td><strong>Hora:</strong></td>
                                <td>
                                <!--Seleccion de la hora programada--> <!-- Se deben de regir por el horario de trabajo del taller de manufactura-->
                                    <input type="time" name="hora" value="08:00" max="20:00" min="08:00">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bodyFormularioSeccion" style="margin-top:10px;">
                    <table style="max-width:100%;">
                        <tbody>
                            <tr>
                                <h4 class="thTitulo">MOTIVO DE SOLICITUD</h4> 
                            </tr>
                            <tr> 
                                <td><strong>No.De Cuenta</strong></td><!--Seleccion de la materia-->
                                <td class="TableInput">
                                    <select>
                                        <option selected>Seleccione la materia</option>
                                        <option>Las bases de la termodinámica y de la mecánica de fluidos</option>        <!--todo esto se debe de sustituir-->           
                                        <option>Estudio de la electrónica y la electrotecnia</option>            <!--todo esto se debe de sustituir-->
                                        <option>Energía sostenible: transporte y generación</option>             <!--todo esto se debe de sustituir-->
                                        <option>Gestionar una empresa que sea sostenible</option>                <!--todo esto se debe de sustituir-->
                                        <option>Diseño de organizaciones y empresas sostenibles y cómo fomentar la innovación en ellas</option>      <!--todo esto se debe de sustituir-->
                                        <option>Automatizar y gestionar adecuadamente empresas sostenibles</option>      <!--todo esto se debe de sustituir-->
                                        <option>Dirección de recursos humanos y de la gestión de equipos</option>        <!--todo esto se debe de sustituir-->
                                        <option>La creación de empresas.</option>                       <!--todo esto se debe de sustituir-->
                                    </select> 
                                </td>
                            
                                <td><strong>Tipo de tarbajo</strong></td><!--Seleccion del tipo de proyecto-->
                                <td class="TableInput">
                                    <select>
                                        <option selected>Seleccione el tipo de trabajo</option>
                                        <option>Tesis</option>        <!--todo esto se debe de sustituir-->           
                                        <option>Proyecto de asignatura</option>            <!--todo esto se debe de sustituir-->
                                        <option>Investigacion</option>             <!--todo esto se debe de sustituir-->
                                        <option>Otro</option>                <!--todo esto se debe de sustituir-->
                                    </select> 
                                </td>
                                <tr>
                                    <td colspan="4"><textarea class="textarea" placeholder="Descripcion del trabajo a realizar"></textarea></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bodyFormularioSeccion" style="margin-top:10px;">
                    <table style="max-width:100%;">
                            <tbody>
                                <tr>
                                    <h4 class="thTitulo">MAQUINAS EMPLEADAS</h4> 
                                </tr>
                            </tbody>
                    </table>
                </div> 
                <div class="bodyFormularioSeccion" style="margin-top:10px;">
                    <table style="max-width:100%;">
                            <tbody>
                                <tr>
                                    <h4 class="thTitulo">HERRAMIENTAS EMPLEADAS</h4> 
                                </tr>
                            </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>

</body>
</html>