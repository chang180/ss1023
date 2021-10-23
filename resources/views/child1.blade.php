<!-- resources/views/child1.blade.php -->

@extends('layouts.app2')

@section('title', 'page1')

@section('sidebar')
    @parent

    <p>子版一</p>
@endsection

@section('content')
    <p>test test1</p>
    <a href="{{route('books.child2')}} ">子版二</a>
    <a href="{{route('books.index')}} ">回主版</a>
@endsection