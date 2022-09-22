import './bootstrap';
import Echo from 'laravel-echo'

let e = new Echo({
    broadcaster :'socket.io',
    host: window.location.hostname + ':6001'
})
e.channel('chan-demo').listen('PostCreatedEvent', function (e){
    console.log(e)
})
if (typeof authuser === 'object' && authuser !== null){
    e.private(`group.${ authuser.group_id }`).listen('GroupWithEvent', function (e){
        console.log('GroupWithEvent', e.id)
    })
}
$('#demo').click(function (e) {
    e.preventDefault()
    $.get('/posts')
})
