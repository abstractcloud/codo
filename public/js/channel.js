var socket = io('http://127.0.0.1:3000');
console.log(socket);

$('#sendmsg').click(function () {
    console.log('send message');
    
    socket.emit('message', {
        message: $('#msg').val()
    });
});