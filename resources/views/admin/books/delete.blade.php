
@extends('admin.layout')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection

@section('content')
    <h2> {{$message}}</h2>
@endsection
