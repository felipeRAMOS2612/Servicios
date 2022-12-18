const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')

const regExp = {

    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{9,14}$/,
}

const campos = {
    Name: false,
    Email: false,
    Tel: false,
}


const validarFormulario = (e)=>{
    switch(e.target.name){
        case "nombre":
            validarCampos(regExp.nombre, e.target.value, 'Name')
        break
        case "email":
            validarCampos(regExp.email, e.target.value, 'Email')
        break
        case "telefono":
            validarCampos(regExp.telefono, e.target.value, 'Tel')
        break
        
    }
}

validarCampos = (reg, input, campo) =>{
    if(reg.test(input)){
        document.getElementById(`input${campo}`).classList.remove('border-danger')
        document.getElementById(`input${campo}`).classList.add('border-success')
        document.querySelector(`#group__${campo} .input-error`).classList.remove('input-activo', 'bg-danger')
        campos[campo] = true;
    }else{
        document.getElementById(`input${campo}`).classList.add('border', 'border-2', 'border-danger')
        document.querySelector(`#group__${campo} .input-error`).classList.add('input-activo', 'bg-danger')
        campos[campo] = false;
    }
}

inputs.forEach((input)=>{
    input.addEventListener('blur', validarFormulario)
})


formulario.addEventListener('submit', (e)=>{
    e.preventDefault();

    if(campos.Name && campos.Email && campos.Tel){
        formulario.reset(); 
        document.getElementById('formulario__mensaje').classList.remove('d-flex');
        document.getElementById('formulario__mensaje').classList.add('d-none');
    }else {
        document.getElementById('formulario__mensaje').classList.remove('d-none');
        document.getElementById('formulario__mensaje').classList.add('d-flex')
    }
}
)

