document.getElementById('button-up').addEventListener('click', scrollup)

function scrollup(){
    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
    if(currentScroll > 0){
        window.scrollTo(0, 0)
    }
}

const buttonUp = document.getElementById('button-up')

window.onscroll = function(){
    var scroll = document.documentElement.scrollTop;
    console.log(scroll)
    if(scroll > 100){
        buttonUp.style.transform = 'scale(1)';
    } else if (scroll < 100){
        buttonUp.style.transform = 'scale(0)'
    }
}