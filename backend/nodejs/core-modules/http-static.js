const http = require('http').createServer(),
    path = require('path'),
    fs = require('fs')

const port = 8000,
    hostname = 'localhost',
    urls = [
        {
            route: '',
            output: 'assets/index.html'
        },
        {
            route: 'info',
            output: 'assets/info.html'
        }
    ]

const webServer = (req, res) => {
    const pathUrl = path.basename(req.url)

    const renderTemplate = (error, data) => {
        if (error) throw error
        res.end(data)
    }

    urls.forEach((url) => {
        if (url.route === pathUrl) {
            res.writeHeader(200, { 'Content-Type': 'text/html' })
            fs.readFile(url.output, renderTemplate)
        }
    })

    if (!res.finished) {
        res.writeHeader(404, { 'Content-Type': 'text/html' })
        fs.readFile('assets/404.html', renderTemplate)
    }
}

const readyServer = () => {
    console.log(`Server: http://${hostname}:${port}/`)
}

http
    .on('request', webServer)
    .listen(port, hostname, readyServer)
