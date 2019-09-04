@extends('layouts.app')

@section('content')
<script src="http://127.0.0.1:3000/socket.io/socket.io.js"></script>

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-8">
               <h3>Channel</h3>
           </div>
           <div class="col-md-4 channel-wrp">
                <div class="messages-list">
                    <h3>Chat list</h3>
                    
                    <div class="channel__message-wrap">
                        <textarea id="msg" class="channel__message-write"></textarea>
                        <button data-user="{{ Auth::user()->username }}" class="btn btn-info btn-custom" id="sendmsg">SEND</button>
                    </div>
                </div>
           </div>
       </div>
        
        
    </div>
</div>
<!-- End content -->
<script src="{{ asset('js/channel.js') }}"></script>
@endsection