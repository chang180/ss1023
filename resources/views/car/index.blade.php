<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.1.3/css/bootstrap.min.css') }} ">
    <script src="{{ asset('assets/bootstrap-5.1.3/js/bootstrap.bundle.js') }} "></script>
</head>

<body>
    <div class="container">
        <h1>Input Array</h1>
        <form action="{{ route('formData') }} " method="POST">
            @csrf
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td><input type="text" name="id[]"></td>
                    <td><input type="text" name="name[]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id[]"></td>
                    <td><input type="text" name="name[]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id[]"></td>
                    <td><input type="text" name="name[]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id[]"></td>
                    <td><input type="text" name="name[]"></td>
                </tr>
            </table>
            <button class="btn btn-outline-primary">送出</button>
        </form>
    </div>
    <hr>
    <div class="container">
        <h1>計算機</h1>
        <div class="d-flex">
            <div class="box1 col-6">
                <form action="{{ route('calData') }} " method="POST">
                    @csrf
                    <p>
                        <label for="num1">num1</label>
                        <input type="text" name="num1" id="">
                    </p>
                    <p>
                        <label for="num2">num2</label>
                        <input type="text" name="num2" id="">
                    </p>
                    <p>
                        <select name="mySelect" id="">
                            <option value="1">+</option>
                            <option value="2">-</option>
                            <option value="3">*</option>
                            <option value="4">/</option>
                        </select>
                    </p>
                    <button class="btn btn-outline-primary">送出</button>
                </form>
            </div>
            @if (isset($calData) && !is_null($calData['num1']))
                <div class="box2 col-6">
                    <h3>Calculator</h3>
                    <hr>
                    num1={{ $calData['num1'] }} <br>
                    num2={{ $calData['num2'] }}<br>
                    method:{{ $calData['calculator'] }} <br>
                    result ={{ $calData['result'] }}
                </div>
            @endif
        </div>
    </div>
    <hr>
    <div class="container">
        <h1>Result 99</h1>
        <div class="d-flex">
            <div class="box1 col-4">
                <form action="{{ route('practice') }} " method="POST" class="d-flex flex-column">
                    @csrf
                    <label for="no1">Number 1</label>
                    <input type="text" name="no1" id="">
                    <label for="no2">Number 2</label>
                    <input type="text" name="no2" id="">
                    <button class="btn btn-outline-info">送出</button>
                </form>
            </div>
            <div class="box2 col-8">
                @if (isset($practiceData) && !is_null($practiceData))
                    @for ($i = 1; $i <= $practiceData['no1']; $i++)
                        @for ($j = 1; $j <= $practiceData['no2']; $j++)
                           <div> {{ $i }} * {{ $j }} = {{ $practiceData['result'][$i][$j] }}&nbsp;</div>
                        @endfor
                        <br>
                    @endfor
                @endif
            </div>
        </div>
    </div>
</body>

</html>
