const http= require('http');
const fs= require('fs');

http.createServer(function(req,res){
    fs.readFile('file1.txt',function(err,data){
        res.writeHead(200,{'Content-Type':'text/html'});
        res.write(data);
        return res.end();
    });
    fs.appendFile('file1.txt', ' Appending text at the End ', function (err) {
        if (err) throw err;
        console.log('Updated!');
      });

}).listen(8080);

