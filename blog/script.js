var burguer = document.querySelector("#burguer-button")
var barmenu = document.querySelector(".nav-menu")
burguer.addEventListener('click', e => {
console.log("hOLA")
barmenu.classList.toggle("mostrarMenu")

})


let botonPost = document.getElementById('post-button');
botonPost.addEventListener('click', (e)=>{
    let postName = e.target.dataset.target
    let post = document.getElementById(postName)
    post.style.height = '100%';    
    post.style.overflow = 'auto';
})