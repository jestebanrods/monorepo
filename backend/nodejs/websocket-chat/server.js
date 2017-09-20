//Importación de librerías
var express = require('express');
var app = express();
var server = require('http').Server(app);
var io = require('socket.io')(server);

//Prototipo de mensaje a enviar
var messages = [{
  id: 1,
  text: "Hola soy un mensaje",
  author: "Jossie"
}];

//Definición de la carpeta del frontend
app.use(express.static('public'));

//Definición de la ruta hello
app.get('/hello', function (req, res) {
  res.status(200).send("Hello World!");
});

//Configuración del websocket
io.on('connection', function (socket) {
  console.log('Usuario nuevo conectado');
  socket.emit('messages', messages);
  socket.on('new-message', function (data) {
    messages.push(data);
    io.sockets.emit('messages', messages);
  });
});

//Abrir el servidor de websockets en el puerto 7000
server.listen(7000, function () {
  console.log("Servidor corriendo en http://localhost:7000");
});
