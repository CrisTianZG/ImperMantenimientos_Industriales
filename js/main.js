let ubicacionPrincipal = window.pageYOffset;

//efecto ventanas
  AOS.init();

//efecto nav-bar
window.addEventListener("scroll", function(){
    let desplazamientoActual = window.pageYOffset;
    if(ubicacionPrincipal>=desplazamientoActual){

        document.getElementsByTagName("nav")[0].style.top="0px"

    }else{

        document.getElementsByTagName("nav")[0].style.top="-100px"
    }

    ubicacionPrincipal=desplazamientoActual;
});


//menu hamburgesa

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;

document.querySelectorAll(".hamburger")[0].addEventListener("click", function(){

    if(semaforo){

        document.querySelectorAll(".hamburger")[0].style.color = "#FFF";
        semaforo = false;
    }else{
        document.querySelectorAll(".hamburger")[0].style.color = "#000";
        semaforo = true; 
    }

    enlacesHeader.classList.toggle("menudos")

});


//mostrar/ocultar-galerias


function ocultar(){

document.getElementById("mostrar-ocultar").style.display="none";

}

function mostrar(){

    document.getElementById("mostrar-ocultar").style.display="block";

}
