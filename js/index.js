const pisos = document.querySelectorAll('#numero-pisos .pisos');
const contenedorMateriales = document.querySelectorAll('.materiales')
let pisoActivo = null;

const boton = document.querySelectorAll('.btn');

boton.forEach((button) =>{
    button.addEventListener('click', (e)=>{
        boton.forEach((elemento)=>{
            elemento.classList.remove('active');
        });

        e.currentTarget.classList.toggle('active');
    })
})


pisos.forEach((piso) =>{
    piso.addEventListener('click', (e)=>{
        pisos.forEach((elemento)=>{
            elemento.classList.remove('activa');
        });

        e.currentTarget.classList.toggle('activa');
        pisoActivo = piso.dataset.numero;
        console.log(pisoActivo)
        
        contenedorMateriales.forEach((contenedor) =>{
            console.log(contenedor)
            if(contenedor.dataset.numero === pisoActivo){
                contenedor.classList.add('activo')
            }else{
                contenedor.classList.remove('activo')
            }
        })
    })
})

