const contenedor = document.querySelectorAll('.categoria');


contenedor.forEach((imagen)=>{
    imagen.addEventListener('click',(e)=>{
        e.currentTarget.classList.toggle('activa')
        
    });
})