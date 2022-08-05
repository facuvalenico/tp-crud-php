
var donald = function (){
   
    var preguntae=window.confirm("Confirme la eliminación del proyecto: ");
    if (preguntae==false) {
        event.preventDefault(); 
        window.alert("La eliminación del proyecto ha sido cancelada");
    }else{
        window.alert("El proyecto ha sido eliminado.");
               
    }    
}




