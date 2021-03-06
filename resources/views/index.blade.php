<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('favicon.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.og')
        <title>Home | The Campsite</title>
    </head>
    <body>
        @include('layouts.nav')
        @include('layouts.snow')
        <div class="has-text-centered is-middle">
            <h1 class="has-text-white has-space"><u>The Campsite</u></h1>
            <h3 class="has-text-white is-custom"><mob>Welcome to the official website for the campsite community!<br>
                You can join our server by going to <a href="https://discord.gg/4K4DYM5" target="_blank" class="custom-link">discord.gg/campsite</a></mob></h3>
        </div>
    </body>
</html>