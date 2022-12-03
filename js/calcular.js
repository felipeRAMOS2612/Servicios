function calcular(){
    let metros = parseFloat(document.getElementById('formetros').value);
    let resul = metros * 5500

    if(isNaN(metros)){
        resultado.innerHTML = 'introduce algun numero';
        const error = document.querySelector('.resultado');
        error.classList.add('alert', 'alert-danger', 'w-100')
    } else{
        const error = document.querySelector('.resultado');
        error.classList.remove('alert', 'alert-danger');
        resultado.innerHTML = 'Precio: ' + '$' + resul;
        const correcto = document.querySelector('.resultado');
        resultado.classList.add('alert', 'alert-success')
    }

}

function calcularCeramica(){
    let metrosC = parseFloat(document.getElementById('forMetrosCeramica').value);
    let resulCeramica = metrosC * 7000

    if(isNaN(metrosC)){
        resultadoC.innerHTML = 'introduce algun numero';
        const error = document.querySelector('.resultadoC');
        error.classList.add('alert', 'alert-danger', 'w-100')
    } else{
        const error = document.querySelector('.resultadoC');
        error.classList.remove('alert', 'alert-danger');
        resultadoC.innerHTML = 'Precio: ' + '$' + resulCeramica;
        const correcto = document.querySelector('.resultadoC');
        resultadoC.classList.add('alert', 'alert-success')
    }

}

