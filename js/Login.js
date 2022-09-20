//Ejecucion de las funciones

document.getElementById("btnRegistro").addEventListener("click",Registro);
document.getElementById("btnLogin").addEventListener("click",Login);
window.addEventListener("resize",anchoPagina);

//Declaracion de varibles
var cajaTrasera=document.querySelector(".cajaTrasera")
var contenedorLoginRegistro=document.querySelector(".contenedorLoginRegistro")
var formularioLogin=document.querySelector(".formularioLogin")
var formularioRegistro=document.querySelector(".formularioRegistro")
var cajaTraseraLogin=document.querySelector(".cajaTraseraLogin")
var cajaTraseraRegistro=document.querySelector(".cajaTraseraRegistro")
//var footer=document.querySelector("footer")
var contenedorCuentaSemestre=document.querySelector(".contenedorCuentaSemestre")
var btnRegistro=document.querySelector(".btnRegistro")
var inputCuenta=document.querySelector(".inputCuenta")
var inputSemestre=document.querySelector(".inputSemestre")


function anchoPagina(){
    //Permite modificar el estilo de los elementos en dispositivos moviles
    if(window.innerWidth>850){ //Pantallas grandes
        //cajaTrasera.className="cajaTraseraRegistro";
        cajaTraseraLogin.style.display="block";
        cajaTraseraRegistro.style.display="block";
        contenedorCuentaSemestre.style.display="inline-flex";
        cajaTrasera.style.padding="10px";
        cajaTraseraLogin.style.margin="100px 5px";
        formularioRegistro.style.width="550px";	
        formularioRegistro.style.left="-90px";
        formularioRegistro.style.padding="20px";

        
    }
    else{ //Dispositivos moviles
        cajaTraseraRegistro.style.display="block";
        cajaTraseraRegistro.style.opacity="1";
        cajaTraseraLogin.style.display="none"
        formularioLogin.style.display="block";
        formularioRegistro.style.display="none";
        contenedorLoginRegistro.style.left="0px";
        contenedorCuentaSemestre.style.display="block";
        cajaTraseraRegistro.style.margin="100px 40px";
        cajaTrasera.style.padding="10px 20px";
        formularioRegistro.style.left="0";
        inputSemestre.style.margin="20px 0px 0px 0px";
        inputCuenta.style.margin="20px 0px 0px 0px";
    }
}
anchoPagina(); // Permite que las cajas y los formularios no se amontonen al cargar la pagina

function Registro(){
    if (window.innerWidth > 850){
        formularioRegistro.style.display="block";
        contenedorLoginRegistro.style.left="410px";
        formularioLogin.style.display="none";
        cajaTraseraRegistro.style.opacity="0";
        cajaTraseraLogin.style.opacity="1";
        
        
        
    }
    else{
        formularioRegistro.style.display="block";
        contenedorLoginRegistro.style.left="0px";
        formularioLogin.style.display="none";
        cajaTraseraRegistro.style.display="none";
        cajaTraseraLogin.style.display="block";
        cajaTraseraLogin.style.opacity="1";
        inputSemestre.style.margin="20px 0px 0px 0px";
        inputCuenta.style.margin="20px 0px 0px 0px";

    }

}
function Login(){
    if(window.innerWidth > 850)
    {
        formularioRegistro.style.display="none";
        contenedorLoginRegistro.style.left="10px";
        formularioLogin.style.display="block";
        cajaTraseraRegistro.style.opacity="1";
        cajaTraseraLogin.style.opacity="0";
        cajaTraseraLogin.style.margin="auto";
        formularioLogin.style.padding="100px 20px";

    }
    else{
        formularioRegistro.style.display="none";
        contenedorLoginRegistro.style.left="0px";
        formularioLogin.style.display="none";
        cajaTraseraRegistro.style.display="block";
        cajaTraseraLogin.style.display="none";
        
    }
    
}
Login();