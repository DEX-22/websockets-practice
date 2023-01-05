<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>websockets test</title>
</head>
<body>
    
    <h1>websockets test</h1>

    <button onclick="{{ $sendNotification() }}">
        click aqui!!
    </button>


</body>
<script>
// import Echo from 'laravel-echo'
    // const Echo = require('laravel-echo')

    const pusherParams = {
                            broadcaster: 'pusher',
                            key: process.env.PUSHER_APP_KEY,
                            wsHost: process.env.PUSHER_HOST,
                            wsPort: process.env.PUSHER_PORT,
                            forceTLS: false,
                            disableStats: true,
                        }

    console.log(pusherParams)

    window.Pusher = require('pusher-js')
    
    window.Echo = new Echo(pusherParams)
</script>
</html>