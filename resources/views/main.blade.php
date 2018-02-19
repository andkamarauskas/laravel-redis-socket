@extends('layouts.app')

@section('content')
<div>
    start
</div>
    <ul id="messages">
        
    </ul>
@stop

@section('scripts')
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        socket.on("messages-channel:App\\Events\\MessageEvent", function(message){
            console.log(message.data);
            // increase the message everytime we load test route
            var html = '<li>' + message.data.sms + '</li>';
            $('#messages').append(html);
        });
    </script>
@stop