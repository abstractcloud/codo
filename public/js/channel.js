var socket = io('http://127.0.0.1:3000');
console.log(socket);

$('#sendmsg').click(function () {
    console.log('send message');
    
    socket.emit('message', {
        message: $('#msg').val(),
        username: $(this).data('user')
    });
    
    $('#msg').val('');
});

socket.on('server_msg', function (msg) {
    $('.message-items').append("<div class='msg-item'><span class='msg-sender'>"+ msg.username +"</span><span class='msg-time'>"+ msg.datetime +"</span><p class='msg-text'> >> "+ msg.message +"</p>");
});