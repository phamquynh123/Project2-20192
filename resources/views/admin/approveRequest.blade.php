@extends('layouts/adminHeader')
@section('style')
    <link rel="stylesheet" href="{{ asset('bower_components/MyCSSJS/bs4Class.css') }}">
    <style>
        .btn{
            margin-left: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="block-header">
        <h2>{{ trans('message.news') }}</h2>
    </div>
    <div class="row clearfix">
        <div class=" float-right">
            <button class="btn btn-info" data-toggle="modal" data-target="#news-add">{{ trans('action.add') }} {{ trans('message.news') }}</button>
        </div>
        <div class="clear"></div>
        <table class="table table-hover" id="approve" data-url="{{ route('aproveRequest') }}">
            <thead>
                <tr>
                    <th>{{ trans('message.id') }}</th>
                    <th>{{ trans('message.email') }}</th>
                    <th>{{ trans('message.name') }}</th>
                    <th>{{ trans('message.avatar') }}</th>
                    <th>{{ trans('message.role') }}</th>
                    <th>{{ trans('message.addVip') }}</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@section('script')
    <script src="{{ asset('/') }}bower_components/MyCSSJS/user.js"></script>
@endsection