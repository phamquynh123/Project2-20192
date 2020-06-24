@extends('layouts/adminHeader')
@section('style')
    <link rel="stylesheet" href="{{ asset('bower_components/MyCSSJS/bs4Class.css') }}">
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
        <table class="table table-hover" id="news" data-url="{{ route('news.datatable') }}">
            <thead>
                <tr>
                    <th>{{ trans('message.id') }}</th>
                    <th>{{ trans('message.title') }}</th>
                    <th>{{ trans('message.created_at') }}</th>
                    <th style="width: 100px">{{ trans('message.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
{{-- translate news --}}
<div id="news-trans" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ trans('message.trans') }} {{ trans('message.news') }}</h4>
            </div>
            <div class="modal-body">
                <div class="tranted">
                    Ngon ngu da dich cho <b class="bangoc"></b> la
                </div>
                <div>
                    <table class="table table-hover">
                        <thead >
                            <tr>
                                <th>{{ trans('message.id') }}</th>
                                <th>{{ trans('message.language') }}</th>
                                <th>{{ trans('message.news') }}</th>
                            </tr>

                        </thead>
                        <tbody class="trans_ed">
                        </tbody>
                    </table>
                </div>
                <form action="" method="POST" role="form" novalidate id="transData">
                    @csrf
                    {{-- <legend>{{ trans('message.trans') }} {{ trans('message.news') }} </legend> --}}
                    <input type="hidden" value='' id='parent_language_id' name='parent_language_id'>
                    <input type="hidden" value='' id='parent_id' name='parent_id'>
                    <div class="form-group">
                        <label for="">{{ trans('message.language') }}</label>
                        <select name="language_id" id="language" class="form-control">
                            @foreach ($languages as $language)
                                <option value="{{ $language->id }}" >{{ $language->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.title') }} {{ trans('message.news') }}</label>
                        <input type="text" class="form-control" id="add-name" name="title" placeholder="Input field">
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('message.close') }}</button>
                        <button type="submit" class="btn btn-info ">{{ trans('message.submit') }}</button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>

    </div>
</div>

{{-- Add new news --}}
<div id="news-add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('action.add') }} {{ trans('message.news') }}</h2>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" novalidate id="submitAdd">
                    @csrf
                    <div class="form-group">
                        <label for="" class="error"><h4>{{ trans('action.default') }} {{ trans('message.language') }} {{ trans('message.vi') }}</h4></label>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.title') }} {{ trans('message.news') }}</label>
                        <input type="text" class="form-control" id="add-name" name="title" placeholder="Input field">
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('message.close') }}</button>
                        <button type="submit" class="btn btn-info">{{ trans('message.submit') }}</button>
                    </div>
                   <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Edit --}}

<div id="news-edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('action.edit') }} {{ trans('message.news') }}</h2>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" novalidate id="submitEdit">
                    @csrf
                    <div class="form-group">
                        <label for="" class="error"><h4>{{ trans('action.default') }} {{ trans('message.language') }} {{ trans('message.vi') }}</h4></label>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="edit-id">
                        <label for="">{{ trans('message.title') }} {{ trans('message.news') }}</label>
                        <input type="text" class="form-control" id="edit-name" name="title" placeholder="Input field">
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('message.close') }}</button>
                        <button type="submit" class="btn btn-info">{{ trans('message.submit') }}</button>
                    </div>
                   <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script src="{{ asset('/') }}bower_components/MyCSSJS/news.js"></script>
@endsection