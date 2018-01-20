//Establecer conección con el websocket
const socket = io.connect(`https://jossiechat.herokuapp.com`, { 'forceNew': true });

//Estar a la escucha de un mensaje
socket.on('messages', (data) => {
  render(data);
})

//Renderizar la nueva información
const render = (data) => {
  let html = data.map((elem, index) => {
    return(`<div>
              <strong>${elem.author}</strong>:
              <em>${elem.text}</em>
            </div>`);
  }).join(" ");
  document.getElementById('messages').innerHTML = html;
}

//Si se da click en el botón enviar
//Se recupera los datos a enviar y se envian por el websocket
const addMessage = (event) => {
  let message = {
    author: document.getElementById('username').value,
    text: document.getElementById('texto').value
  };
  socket.emit('new-message', message);
  return false;
}
