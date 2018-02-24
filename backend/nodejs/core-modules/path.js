const http = require('http').createServer(),
    path = require('path')

const port = 8000,
    hostname = 'localhost',
    urls = [
        {
            route: '',
            output: '<h1>Home</h1>'
        },
        {
            route: 'info',
            output: '<h1>Info</h1>'
        }
    ]

const webServer = (req, res) => {
    let pathUrl = path.basename(req.url)

    urls.forEach((url) => {
        if (url.route === pathUrl) {
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

http.on('request', webServer)
    .listen(port, hostname, readyServer)
