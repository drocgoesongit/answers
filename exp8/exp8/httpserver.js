var http = require('http');


http.createServer(function (req, res) {
  res.write('Welcome to http server!');
  res.end(); 
}).listen(8080); 