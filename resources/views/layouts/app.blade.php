<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script type="text/javascript">
            var API_URL = "{{ env('API_URL', 'http://localhost:8000') }}";
            var APP_URL = "{{ env('APP_URL', 'http://localhost/mitrais-web/public') }}";
        </script>
    </head>
    <body>
        @yield('content')

        @section('core-js')
        <!-- Jquery Core Js -->
        <script src="./assets/plugins/jquery/jquery.min.js"></script>
        <script src="./assets/plugins/jquery/jquery.serialize-object.min.js"></script>
        <script src="./assets/plugins/jquery/jquery.base64.min.js"></script>
        <script src="./assets/plugins/jquery/jquery.cookie.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="./assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="./assets/plugins/node-waves/waves.js"></script>

        <!-- Validation Plugin Js -->
        <script src="./assets/plugins/jquery-validation/jquery.validate.js"></script>
        @show

        @section('custom-js')@show
    </body>
</html>
