const contenidoDiv = document.getElementById('contenido');
const contadorCaracteres = document.getElementById('contador-caracteres');
const maxCaracteres = 500;

contenidoDiv.addEventListener('input', function() {
    const contenido = contenidoDiv.innerText;
    const caracteresRestantes = maxCaracteres - contenido.length;
    contadorCaracteres.textContent = `${contenido.length}/${maxCaracteres}`;
    if (caracteresRestantes <= 0) {
      contadorCaracteres.style.color = 'red';
    } else {
      contadorCaracteres.style.color = 'inherit';
    }
  });
