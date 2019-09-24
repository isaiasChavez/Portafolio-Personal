var burguer = document.querySelector("#burguer-button")
var barmenu = document.querySelector(".nav-menu")
burguer.addEventListener('click', e => {
console.log("hOLA")
barmenu.classList.toggle("mostrarMenu")

})




class Blog{
    constructor(){
        this.listarMenuArticulos = this.listarMenuArticulos.bind(this)
        this.numeroDeArticulos = 0;
        this.inicializar()
    }
    inicializar(){
        

        this.$contenedorMenuDeArticulos = document.getElementById('post-list')
        this.$itemMenuArticulos =  `
        <a href=""> <li>contenido</li></a>
        `;
        this.traerDatos()
        .then(this.listarMenuArticulos)
        


    }
    traerDatos(){
        return new Promise((resolve,reject) => {
            fetch('index.php')
            .then( response =>{
                return response.json()
            })
            .then( data => {
                this.listadeArticulos = data
                resolve()
            })
            .catch( error => reject(error))

        })
        
    }
    listarMenuArticulos(){
        this.limpiarSeccion(this.$contenedorMenuDeArticulos);
        for (const i in this.listadeArticulos) {
                const element = this.listadeArticulos[i];
                console.log(element)
                this.agregarSeccion(this.$contenedorMenuDeArticulos,this.$itemMenuArticulos.replace('contenido',element.titulo))
        }
    }

    limpiarSeccion(contenedor){
        contenedor.innerHTML = '';
    }
    agregarSeccion(contenedor,articulo){
        contenedor.innerHTML += articulo;
    }
    



}

window.Blog = new Blog();
