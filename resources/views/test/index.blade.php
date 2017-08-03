<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script>
    var socket = io('http://crm.app:6001');
    socket.on('connection', function (data) {
        console.log(data);
    });
    socket.on('test-channel:App\\Events\\SomeEvent', function(message){
        console.log(message);
    });
    console.log(socket);
</script>

{{--
@component('inc.alert')
@slot('title')
Forbidden
@endslot
<strong>Whoops!</strong> Something went wrong!
@endcomponent--}}
