<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content={{csrf_token()}}>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
            <!--scripts-->
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

            <script>
                // Enable pusher logging - don't include this in production
                Pusher.logToConsole = true;

                var pusher = new Pusher('f98163bab26da696349c', {
                cluster: 'eu'
            });

                var channel = pusher.subscribe('test-channel');
                channel.bind('test-event', function(message) {

                });
        </script>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">  <h1>Pusher Test</h1>
            <form action="/chat" method="post">
               @csrf
                <div class="container"  id="chat-box">

                </div>
                <input type="text" name="message" id="message_input">
                <input type="submit" value="send">
            </form>
        </div>
    </body>
</html>
