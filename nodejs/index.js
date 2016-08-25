var server = require('http').createServer();
var io = require('socket.io')(server);
io.on('connection', function (client) {
  client.on('statusChange', function (data) {
    client.broadcast.emit('statusChange', data);
    console.log('statusChange', data);
  });
  client.on('disconnect', function () {});
});

server.listen(3000);
