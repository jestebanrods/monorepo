//Modo estricto
'use strict'

//Importación de librerías
const express = require('express');
const app = express();
const server = require('http').Server(app);
const io = require('socket.io')(server);
const pg = require('pg');

//Definición de constantes
const port = process.env.PORT;
const connectionString = process.env.DATABASE_URL;

//Definición de objetos
const client = new pg.Client(connectionString);

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
  response.status(200).send(`
    Hello World! the database name is ${process.env.DATABASE_NAME}
  `);
});

//Correr el servidor
server.listen(port, () => {
  console.log(`Server started in https://localhost:${port}`);
});

//Configuración del servidor de websocket
io.on('connection', (socket) => {
  console.log('New user connect');
  socket.emit('messages', messages);
  socket.on('new-message', (data) => {
    messages.push(data);
    io.sockets.emit('messages', messages);
  });
});

/**
const client = new pg.Client({
  user: process.env.DATABASE_USER,
  host: process.env.DATABASE_HOST,
  database: process.env.DATABASE_NAME,
  password: process.env.DATABSE_PASSWORD,
  port: process.env.DATABASE_PORT,
})
*/

//Conexión a bbdd postgresql
client.connect()

client.query("CREATE TABLE IF NOT EXISTS personas(nombre varchar(64), apellido varchar(64), matriculado boolean)")
  .catch(e => console.error(e.stack))

client.query("INSERT INTO personas (nombre, apellido, matriculado) VALUES ($1, $2, $3)", ['Karen', 'Murillo', true])
  .catch(e => console.error(e.stack))

client.query("SELECT * FROM personas")
  .then(res => {
    res.rows.forEach((item) => {
      console.log(item)
    })
  })
  .catch(e => console.error(e.stack))
