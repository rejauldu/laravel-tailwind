<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <div class="container mx-auto text-justify bg-gradient-to-r from-indigo-500 to-purple-500 text-white p-5 text-2xl rounded-sm font-bold">
        <h1 class="text-6xl text-center">tailwind.config.js</h1>
        <pre>
        module.exports = {
            content: [], <span class="text-red-500">//your files</span>
            theme: { <span class="text-red-500">//Override default</span>
                extend: {}, <span class="text-red-500">//Adds new</span>
            },
            plugins: [],
        }
        </pre>
    </div>
    </body>
</html>
