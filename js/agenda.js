var buttonCancelar = document.getElementById('buttonCancelar');
var buttonNovoEvento = document.getElementById('buttonNovoEvento');
var novoEvento = document.getElementById('novoEvento');

function novoEvento() {
    novoEvento.classList.remove('d-none');
  }

function ocultar() {
    novoEvento.classList.add('d-none');
  }

buttonNovoEvento.addEventListener('click', novoEvento);
buttonCancelar.addEventListener('click', ocultar);