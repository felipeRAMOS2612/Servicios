const categorias = document.querySelectorAll('#categorias .categoria');
const contenedorImagenes = document.querySelectorAll('.contenedor-imagenes');

let categoriaActiva = null;

categorias.forEach((categoria)=>{
    categoria.addEventListener('click',(e)=>{
        categorias.forEach((element)=>{
            element.classList.remove('active');
        })
        e.currentTarget.classList.toggle('active');
        categoriaActiva = categoria.dataset.categoria;

        contenedorImagenes.forEach((contenedor)=>{
            if(contenedor.dataset.categoria === categoriaActiva){
                contenedor.classList.add('activo')
            }else{
                contenedor.classList.remove('activo')
            }
        })
    })
})