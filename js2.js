var modificarproyecto = document.getElementById("btn-modificar-proyecto");
var chip = function (a){
    
    var preguntam=window.confirm("Confirme la modificación del proyecto: ");
    if (preguntam==true) {
        window.alert("El proyecto ha sido modificado.");
    }else{
        window.alert("La modificación del proyecto ha sido cancelada");
        a.preventDefault(); 
    }
}
modificarproyecto.addEventListener("click",chip);
