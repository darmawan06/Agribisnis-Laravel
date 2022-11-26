<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Agribisnis" />
        <meta name="description" content="Website Agribisnis Dibuat Oleh Ahlinyawebsite.com" />
        <meta name="author" content="Agribisnis" />
        <title>Agribisnis</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @if(View::hasSection('title'))
                @yield('title')
            @else
                Agribisnis
            @endif
        </title>

        @include('layouts.common.components.style')

    </head>
    <body class="background-primary">
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    @yield('content')
                </main>
            </div>
            <div id="layoutDefault_footer">
                @include('layouts.common.components.footer')
            </div>
        </div>
        @include('layouts.common.components.script')
    </body>
    @yield('scriptsCustom')
</html>
