<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>

    @section('font')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @show

    @section('core-css')
    <!-- Bootstrap Core Css -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./assets/plugins/animate-css/animate.css" rel="stylesheet" />
    @show

    <!-- Custom Css -->
    @section('custom-css')@show

    <script type="text/javascript">
        var API_URL = "{{ env('API_URL', 'http://localhost:8000') }}";
        var APP_URL = "{{ env('APP_URL', 'http://localhost/mitrais-web/public') }}";
    </script>
</head>

<body class="@yield('body-class')">
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

    <!-- Custom Js -->
    @section('custom-js')@show
</body>

</html>