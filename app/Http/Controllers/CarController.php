<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function table()
    {
        $myArr = [1, 2, 3]; //index arr
        $myArr = [
            [4, 5, 6],
            [7, 8, 9],
            ['a', 'b', 'c'],
        ];
        $myArr = [
            ['id' => 's01', 'name' => 'amy'],
            ['id' => 's02', 'name' => 'bob'],
            ['id' => 's03', 'name' => 'cat'],
        ];

        $test = 'This is a test.';

        // $myArr['test']=$test; //如有需要，將資料都塞成一包再回傳前端

        // dd($myArr); //最好先確定資料沒問題再開始使用
        return view('car.result')->with('data', $myArr);
    }

    public function formData(Request $request)
    {
        $input = $request->all();
        $data = [];
        foreach ($input['id'] as $key => $val) {
            $data[$key]['id'] = $val;
        }
        foreach ($input['name'] as $key => $val) {
            $data[$key]['name'] = $val;
        }
        return view('car.result')->with('data', $data);
    }

    public function calData(Request $request)
    {
        // dd($request);
        $input = $request;
        $calData = [];
        $calData['num1'] = $input['num1'];
        $calData['num2'] = $input['num2'];
        switch ($input['mySelect']) {
            case '1':
                $calData['calculator'] = '+';
                $calData['result'] = $calData['num1'] + $calData['num2'];
                break;
            case '2':
                $calData['calculator'] = '-';
                $calData['result'] = $calData['num1'] - $calData['num2'];
                break;
            case '3':
                $calData['calculator'] = '*';
                $calData['result'] = $calData['num1'] * $calData['num2'];
                break;
            case '4':
                $calData['calculator'] = '/';
                $calData['result'] = $calData['num1'] / $calData['num2'];
                break;
        }
        // dd($calData);
        return view('car.index')->with(['calData' => $calData]);
    }

    public function practice(Request $request){
        $input=$request->all();
        $data=[];
        $data['no1']=$input['no1'];
        $data['no2']=$input['no2'];
        for($i=1;$i<=$input['no1'];$i++){
            for($j=1;$j<=$input['no2'];$j++){
                $data['result'][$i][$j]=$i*$j;
            }
        }
        // dd($data);
        return view('car.index')->with('practiceData',$data);
    }
}
