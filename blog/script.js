var burguer = document.querySelector("#burguer-button")
var barmenu = document.querySelector(".nav-menu")
burguer.addEventListener('click', e => {
console.log("hOLA")
barmenu.classList.toggle("mostrarMenu")

})