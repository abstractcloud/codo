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
                <h3>Chat list</h3>
                <div class="messages-list">
                    <div class="message-items">
                        
                    </div>
                    
                    <div class="channel__message-wrap">
                        <textarea id="msg" class="channel__message-write"></textarea>
                        
                        <button 
                            data-user="{{ Auth::user()->name }}" 
                            data-uid="{{ Auth::user()->id }}" 
                            data-channel="{{ $channel }}" 
                            class="btn btn-info btn-custom" id="sendmsg">SEND</button>
                    </div>
                </div>
           </div>
       </div>
        
        
    </div>
</div>
<!-- End content -->
@endsection




@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
<script src="{{ asset('js/channel.js') }}"></script>
@endsection