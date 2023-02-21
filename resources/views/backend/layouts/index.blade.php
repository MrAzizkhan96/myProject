<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.includes.head')
</head>

<body>
    @include('backend.includes.master')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('backend.includes.sidebar')
    </aside>
    @yield('content')
    <footer>
        @include('backend.includes.footer')
    </footer>
    @include('backend.includes.scripts')
</body>

</html>
