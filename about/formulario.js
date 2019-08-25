$("#formulario").submit( function(event){
    event.preventDefault()
    enviar()
    console.log("Todo bien")
})
function enviar(){

    let datos = $("#formulario").serialize() //Toma todos los campos que haya ingresado el usuario y los convierte en un arreglo
        $.ajax({
            type:"post",
            url:"formulario.php",
            data: datos,
            success: function(texto){
                if (texto == "exito") {
                        correcto()
                }else{
                    phpError(texto)
                }
            }
        })
}

function correcto() {
    $("#mensajeExito").removeClass("d-none")
    $("#mensajeError").addClass("d-none")
    console.log("Esxxx")
}
function phpError(error) {
    $("#mensajeError").removeClass("d-none")
    $("#mensajeError").html(error)

}