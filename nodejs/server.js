var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('ioredis');

server.listen(8890);



io.on('connection', function (socket) {


  console.log("new client connected");

  var redisClient = redis.createClient();
  redisClient.subscribe('message');

  redisClient.on("message", function(channel, message) {
    console.log("MESSGAE :  "+ message + "");
    socket.emit(channel, message);


    /*redisClient.lpush('messages', JSON.stringify(message));
    redisClient.ltrim('messages', 0, 99);*/
  });


   

  socket.on('disconnect', function() {
    redisClient.quit();
  });


});

