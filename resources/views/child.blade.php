<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <h3>子版的內容</h3>
@endsection

@section('content')
    <p>This is my body content.</p>
    <h4>主體的內容</h4>
    <a href="{{route('books.child1')}} ">子版一</a>
    <a href="{{route('books.child2')}} ">子版二</a>
@endsection