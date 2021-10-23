<!-- resources/views/child2.blade.php -->

@extends('layouts.app2')

@section('title', 'page2')

@section('sidebar')
    @parent

    <p>子版二</p>
@endsection

@section('content')
    <p>test test2</p>
    <a href="{{route('books.child1')}} ">子版一</a>
    <a href="{{route('books.index')}} ">回主版</a>
@endsection