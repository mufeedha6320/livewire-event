<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


        <style>
            .separator {
                width: 1px;
                height: 100%;
                background-color: #000; /* Adjust the color as needed */
            }
        </style>
        @livewireStyles
    </head>
    <body>
        <div class="row p-3 m-3">
            <div class="col-md-4 p-3">
                @livewire('register-form')
            </div>
            <div class="col-md-1 d-flex justify-content-center align-items-center">
                <div class="separator"></div>
            </div>
            <div class="col-md-6 p-3 ">
                @livewire('users-list')
            </div>
        </div>
        @livewireScripts
    </body>
</html>
