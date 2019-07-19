<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Courrie-save</title>
            <!-- Fonts <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
            <!-- Styles -->
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    </head>
    <body>


            <div class="container">
              @include('flash::message')

                  @yield('contenu')

            <div class="links">


    </body>
</html>
