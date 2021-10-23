<!-- resources/views/layouts/app2.blade.php -->

<html>

<head>
    <title>App2 Name - @yield('title')</title>
</head>

<body>
    <h2>app2 blade</h2>

    {{-- section sidebar --}}
    @section('sidebar')
        <h3>主版內容</h3>
    @show
    {{-- @yield('sidebar') --}}

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
