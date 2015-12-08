var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('ioredis');

  
server.listen(8890);



io.on('connection', function (socket) {
    
    socket.on('disconnect', function(){
            console.log( socket.name + ' has disconnected from the chat.');
        });
    socket.on('join', function (name) {
            socket.name = name;
            console.log(socket.name + ' joined the chat.');
        });
       


    var redisClient = redis.createClient();
    redisClient.subscribe('message');

    redisClient.on("message", function(channel, message) {
      console.log("MESSGAE :  "+ message + ""+channel);
      socket.emit(channel, message);    


      
      
  });



   

  /*socket.on('disconnect', function() {
    console.log("client disonnected");
    redisClient.quit();
  });*/


});

