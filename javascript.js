"use strict";
document.querySelector('#miFormulario').addEventListener('submit', function(e) {
  e.preventDefault();
  const data = new URLSearchParams(new FormData(this));
  fetch('procesador.php', {
    method: 'post',
    body: data,
  })
  .then(response => response.text())
  .then(html =>{
    document.querySelector('#container').innerHTML = html;
  })
  .catch(error => console.log(error));
});