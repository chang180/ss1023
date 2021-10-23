<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.1.3/css/bootstrap.min.css')}} ">
    <script src="{{asset('assets/bootstrap-5.1.3/js/bootstrap.bundle.js')}} "></script>
</head>

<body>
    {{-- {{ dd($data) }} --}}
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($data as $val)
            <tr>
                <td>{{ $val['id'] }}</td>
                <td>{{ $val['name'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
