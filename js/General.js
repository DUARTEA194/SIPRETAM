//obtencion del elemento
const MenuLateral=document.querySelector("#menuLateralColapsado");
const BtnPrestamos=document.querySelector("#btnPrestamos")

//Definicion de los eventos
BtnPrestamos.addEventListener("click", MenuExpandido);

//Funcion para expandir el menu lateral
function MenuExpandido(){
        MenuLateral.classList.toggle("menuLateralDesplegado");
        MenuLateral.classList.toggle("menuLateralColapsado");

}
