var nuevoproyecto = document.getElementById("btn-nuevo-proyecto");
var topy = function (c){
    
    var pregunta=window.confirm("Confirme el envío del proyecto: ");
    if (pregunta==true) {
        window.alert("El proyecto ha sido enviado.");
    }else{
        window.alert("El envío del proyecto ha sido cancelado");
        c.preventDefault(); 
    }
}
nuevoproyecto.addEventListener("click",topy);










