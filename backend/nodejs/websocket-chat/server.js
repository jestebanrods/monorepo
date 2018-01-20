//Importación de librerías
const express = require('express');
const app = express();
const server = require('http').Server(app);
const io = require('socket.io')(server);
const port = process.env.PORT || 5000;

//Prototipo de mensaje a enviar
let messages = [{
  id: 1,
  text: "Bienvenidos",
  author: "Administrador"
}];

//Definición de la carpeta del frontend
app.use(express.static(__dirname + '/public'));

//Definición de la ruta hello
app.get('/hello', (request, response) => {
  response.status(200).send("Hello World!");
});

//Abrir el servidor de websockets
server.listen(port, () => {
  console.log(`Server started in https://localhost:${port}`);
});

//Configuración del websocket
io.on('connection', (socket) => {
  console.log('New user connect');
  socket.emit('messages', messages);
  socket.on('new-message', (data) => {
    messages.push(data);
    io.sockets.emit('messages', messages);
  });
});
