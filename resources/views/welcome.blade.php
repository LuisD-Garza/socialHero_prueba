<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
<!-- import CSS -->
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<!-- import JavaScript -->

        <link href="{{asset('css/app.css')}}" rel="stylesheet"> 
    </head>
    <body>
            <div id="app" class="content">
                    {{-- <example-component></example-component> --}}
                    {{-- <loggin-component></loggin-component> --}}
                    <donar-component></donar-component>
            </div>
        <script src="{{asset('js/app.js')}}"></script> 
       
    </body>
</html>