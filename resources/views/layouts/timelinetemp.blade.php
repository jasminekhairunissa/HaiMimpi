<!DOCTYPE html>
    <head>
        @include('includes.head')
        <title>
            Hai Mimpi! - @yield('title')
        </title>
    </head>
    <body>
        @include('includes.header')
        @yield('content')
    </body>
    @include('includes.footer')
</html>
