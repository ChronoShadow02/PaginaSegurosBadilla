let animarformulario = document.querySelectorAll('.clFormularioContacto');
let animarImportanciaSeguros = document.querySelectorAll('.clImportanciaSeguros');
let animarImgImportancia = document.querySelectorAll('.imgImportanciaSeguros');
let animarImgBCBS = document.querySelectorAll('.imgLogoBCBS');

function mostrarScroll() {
    let scrollTop = document.documentElement.scrollTop;
    ///AnimaFormulario
    for (let i = 0; i < animarformulario.length; i++) {
        let alturaAnimado = animarformulario[i].offsetTop;
        if (alturaAnimado - 500 < scrollTop) {
            animarformulario[i].style.opacity = 1;
            animarformulario[i].classList.add('mostrarArriba');
        }
    }
    ///AnimaImportancia de los seguros
    for (let j = 0; j < animarImportanciaSeguros.length; j++) {
        let alturaAnimado = animarImportanciaSeguros[j].offsetTop;
        if (alturaAnimado - 450 < scrollTop) {
            animarImportanciaSeguros[j].style.opacity = 1;
            animarImportanciaSeguros[j].classList.add('mostrarArriba');
        }
    }
    ///Anima la imagen de la cita
    for (let k = 0; k < animarImgImportancia.length; k++) {
        let alturaAnimado = animarImportanciaSeguros[k].offsetTop;
        if (alturaAnimado - 200 < scrollTop) {
            animarImgImportancia[k].style.filter="blur(0)";
        }
    }
        ///Anima la imagen del logo de BCBS
    for (let l = 0; l < animarImgBCBS.length; l++) {
        let alturaAnimado = animarImgBCBS[l].offsetTop;
        if (alturaAnimado - 250 < scrollTop) {
            animarImgBCBS[l].style.opacity=1;
            animarImgBCBS[l].classList.add('mostrarDerecha');
        }
    }
}

window.addEventListener('scroll', mostrarScroll);