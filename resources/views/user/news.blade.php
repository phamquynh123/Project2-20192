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
    {{-- <div class="col-md-9 col-sm-12 col-sx-12 col-12 boder"> --}}
        @foreach($data as $value)
            <div>
                <a href="{{ asset('news/') . '/' . $value['slug'] }}"> {{ $value['title'] }} </a>
                <a href="{{ asset('news/') . '/' . $value['slug'] }}"><p>{{ $value['created_at'] }}</p></a>
                <hr>
            </div>
        @endforeach
        
        {{ $data->links() }}
    </div>
</div>
</div>
@endsection

@section('script')
    <script src='{{ asset('bower_components/MyCSSJS/home.js') }}'></script>
@endsection
