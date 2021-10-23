<!DOCTYPE html>
<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body>
    @section('sidebar')
        <h2>主版的內容</h2>
    @show

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
