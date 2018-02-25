const http = require('http')

const options = {
    host: 'google.com.co',
    port: 80,
    path: '/'
}

const client = http.get(options)

client
    .on('response', (res) => {
        console.log(res.statusCode)
    })
    .on('error', (error) => {
        console.log(error.code)
    })
