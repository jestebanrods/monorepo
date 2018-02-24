const server = require('http').createServer(),
    fs = require('fs')

const hostname = 'localhost',
    port = 8000

const webServer = (req, res) => {
    const readFile = (error, data) => {
        if (error) throw error
        res.end(data)
    }

    res.writeHeader(200, { 'Content-Type': 'text/html' })
    fs.readFile('assets/index.html', readFile)
}

const readyServer = () => {
    console.log(`Server: http://${hostname}:${port}/`)
}

server.on('request', webServer)
    .listen(port, hostname, readyServer);
