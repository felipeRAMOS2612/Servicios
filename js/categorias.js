const categorias = document.querySelectorAll('#categorias .categoria');
const contenedorImagenes = document.querySelectorAll('.contenedor-imagenes');

let categoriaActiva = null;

categorias.forEach((categoria)=>{
    categoria.addEventListener('click',(e)=>{
        categorias.forEach((element)=>{
            element.classList.remove('active')
        })
        e.currentTarget.classList.toggle('active');
        categoriaActiva = categoria.dataset.categoria;
        console.log(categoriaActiva)

        contenedorImagenes.forEach((contenedor)=>{
            if(contenedor.dataset.categoria === categoriaActiva){
                contenedor.classList.add('active')
            }else{
                contenedor.classList.remove('active')
            }
        })
    })
})