const http = require('http').createServer(),
    path = require('path'),
    url = require('url')

const port = 8000,
    hostname = 'localhost',
    urls = [
        {
            id: 1,
            route: '',
            output: '<h1>Home</h1>'
        },
        {
            id: 2,
            route: 'info',
            output: '<h1>Info</h1>'
        }
    ]

const webServer = (req, res) => {
    let pathUrl = path.basename(req.url),
        id = url.parse(req.url, true).query.id

    console.log(`Path: ${pathUrl}, ID: ${id}`)

    urls.forEach((url) => {
        if (url.route == pathUrl || url.id == id) {
            res.writeHeader(200, { 'Content-Type': 'text/html' })
            res.end(url.output)
        }
    })

    if (!res.finished) {
        res.writeHeader(404, { 'Content-Type': 'text/html' })
        res.end('<h1>Error 404: Not Found</h1>')
    }
}

const readyServer = () => {
    console.log(`Server: http://${hostname}:${port}/`)
}

http
    .on('request', webServer)
    .listen(port, hostname, readyServer)
