

const $Formulario = document.getElementById("formulario")
const dataForm = new FormData($Formulario)

const procesarFormulario = function(e){
    e.preventDefault()
    const config = {
        method: "POST",
        body:dataForm
    }
    fetch("formulario.php",config)
        .then( response => {
            if (response.ok) {
                return response.text()
            }
            else{
                throw "Error";
            }
        })
        .then(data => {
            console.log(data)
        })
        .catch( error =>{
            console.log(error)
        })


}


$Formulario.addEventListener('submit', procesarFormulario)