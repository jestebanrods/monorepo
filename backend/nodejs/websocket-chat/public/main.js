//Establecer conección con el websocket del puerto 7000
var socket = io.connect('http://localhost:7000', { 'forceNew': true });

//Estar a la escucha de un mensaje
socket.on('messages', function(data) {  
  console.log(data);
  render(data);
})

//Renderizar la nueva información
function render (data) {  
  var html = data.map(function(elem, index) {
    return(`<div>
              <strong>${elem.author}</strong>:
              <em>${elem.text}</em>
            </div>`);
  }).join(" ");
  document.getElementById('messages').innerHTML = html;
}

//Si se da click en l botón enviar
//Se recupera los datos a enviar y se envian por el websocket
function addMessage(e) {  
  var message = {
    author: document.getElementById('username').value,
    text: document.getElementById('texto').value
  };
  socket.emit('new-message', message);
  return false;
}
