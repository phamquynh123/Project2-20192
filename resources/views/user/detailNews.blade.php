@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('/bower_components/MyCSSJS/myCustom.css') }}">
<link rel="stylesheet" href="{{ asset('/bower_components/MyCSSJS/bs4Class.css') }}">
<style>
    .center{
        text-align:center;
    }
</style>

@endsection

@section('home.content')
<div class="container">
<div class="row">
    <h1 class="center">{{ $data['title'] }}</h1>
    <p>{{ $data['content'] }}</p>
     <hr>
    </div>
</div>
</div>
@endsection

@section('script')
    <script src='{{ asset('bower_components/MyCSSJS/home.js') }}'></script>
@endsection
