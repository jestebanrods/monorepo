'use strict'
const http = require('http');

const hostname = 'localhost';
const port = 3000;

const webServer = (req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/html');
    res.end('<h1>Hola Mundo</h1>');
}

const server = http.createServer(webServer);

server.listen(port, hostname, () => {
    console.log(`El servidor se está ejecutando en http://${hostname}:${port}/`);
});
