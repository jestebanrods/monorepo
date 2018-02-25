const http = require('http'),
    fs = require('fs'),
    querystring = require('querystring'),
    util = require('util')

const server = http.createServer(),
    form = fs.readFileSync('assets/formulario.html')

let dataString = ''

const webServer = (req, res) => {
    if (req.method === 'GET') {
        res
            .writeHead(200, { 'Content-Type': 'text/html' })
            .end(form)
    }

    if (req.method === 'POST') {
        req
            .on('data', (data) => {
                dataString += data
            })
            .on('end', () => {
                let dataObject = querystring.parse(dataString),
                    dataJson = util.inspect(dataObject)

                console.log(`Sending Data: ${dataJson}`)
                res.end(dataJson)
                dataString = ''
            })
    }
}

const readyServer = () => {
    console.log('Server On http://localhost:8000')
}

server
    .on('request', webServer)
    .listen(8000, readyServer)
