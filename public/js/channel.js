$(document).ready(function(){
    var socket = io('http://127.0.0.1:3000');
    
    $('#sendmsg').click(function () {
        console.log('send message');

        socket.emit('message', {
            uid: $(this).data('uid'),
            msg: $('#msg').val(),
            channel:$(this).data('channel'),
            name: $(this).data('user')
        });

        $('#msg').val('');
    });

    $(document).keyup(function(e){
        if(e.keyCode == 13) {
            $('#sendmsg').click();
        }
    });


    socket.emit('init_channel', {
        channel:$("#sendmsg").data('channel'),
    });



    function showMessage(msg){
        $('.message-items').append("<div class='msg-item'><span class='msg-sender'>"+ msg.name +"</span><span class='msg-time'>"+ msg.created_at +"</span><p class='msg-text'> >> "+ msg.msg +"</p>");
    }



    socket.on('server_msg', function (msg) {
        showMessage(msg);
        
        updateScroll();
    });

    socket.on('history', function (msg) {
        console.log(msg);
        msg.forEach(function(e, i){
            showMessage(e);
        });
        
        updateScroll();
    });
    
    function updateScroll(){
      $('.message-items').scrollTop($('.message-items').height());
    }
});
