<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.head')
</head>

<body>
    @include('frontend.includes.master')
    @yield('content')
    <footer>
        @include('frontend.includes.footer')
    </footer>
    @include('frontend.includes.scriptjs') 
</body>

</html>
