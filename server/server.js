var app = require('express')();
var http = require('http').createServer(app);
var io = require('socket.io')(http);
var mongoose = require('mongoose');


var configDB = require('./configs/database');
mongoose.connect(configDB.url);

var Messages = require('./models/messages');

app.get('/', function(req, res){
  res.send('<h1>Hello world</h1>');
});

io.on('connection', function(socket){
  console.log('a user connected');
    
    socket.on('init_channel', function (res) {
        console.log(res, 'channel');
        Messages.find({ "channel": res.channel }, function (err, msg) {
            io.emit('history', msg);
            console.log(msg);
        });
    });
    
    

    socket.on('message', function (msg) {
        var date = new Date();
        var currentDate = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        
        msg.created_at = currentDate;
        io.emit('server_msg', msg);
        
        var message = new Messages({
                uid: msg.uid,
                name: msg.name,
                msg: msg.msg,
                channel: msg.channel,
                created_at: currentDate
        });
            
        message.save(function(err, message) {
            if (err) return console.error(err);
        });
    })
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});