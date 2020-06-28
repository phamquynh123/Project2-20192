@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('/bower_components/MyCSSJS/myCustom.css') }}">
<link rel="stylesheet" href="{{ asset('/bower_components/MyCSSJS/bs4Class.css') }}">
<style>
    .bg-red{
        color:#F44336;
    }
    .center{
        text-align: center;
    }
    .border{
        border: 0.5px black solid;
    }
</style>

@endsection

@section('home.content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12 col-sx-12 col-12 boder">
        <h1 class="center">{{ trans('message.contact') }}</h1>
        <p>Mọi thắc mắc vui lòng liên hệ qua email: <b>quynh.pt168447@sis.hust.edu.vn</b></p>
        <p>SDT: 037 435 2428</p>
        <p>Đội ngũ admin rất hân hạnh được phục vụ bạn</p>
        <p>Chúc các bạn có những buổi đọc truyện vui vẻ. </p>
        <p><b>Đội ngũ admin </b></p>
    </div>
</div>
</div>
@endsection

@section('script')
    <script src='{{ asset('bower_components/MyCSSJS/home.js') }}'></script>
@endsection
