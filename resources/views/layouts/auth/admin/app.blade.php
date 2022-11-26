<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flickercell | Log in</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.auth.admin.components.style')
    @stack('css')
</head>
<body class="hold-transition login-page">
    <div class="login-box marginT-8">
        @yield('content')
    </div>

    @include('layouts.auth.admin.components.script')
    @stack('js')
</body>
</html>
