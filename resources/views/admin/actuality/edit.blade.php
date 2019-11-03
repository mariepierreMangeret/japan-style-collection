@extends('layouts.panel')

@section('title', 'Actuality')

@section('css')
    @include('includes.datatables-css')
    <link href="{{ asset('css/plugins/jquery.tagit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jquery.gritter.css') }}" rel="stylesheet">
    <style>
        #data-table-form-create input {
            width: 100%;
        }
    </style>
@endsection

@section('panel-title', 'Actuality')

@section('panel-body')
    <form method="POST" action="{{ route('actualities.update', [ "actuality" => $actuality->id ]) }}">
        @method('PATCH')
        @csrf
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} row m-b-15">
            <label class="col-form-label col-md-1">Titre</label>
            <div class="col-md-4">
                <input name="title" type="text" class="form-control m-b-5" value="{{ $actuality->title }}"/>
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
            </div>
            <label class="col-form-label col-md-1">Contenu</label>
            <div class="col-md-4">
                <input name="content" type="text" class="form-control m-b-5" value="{{ $actuality->content }}" />
                {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
            </div>
        </div>

        @submit
        Modifier
        @endsubmit
    </form>
@endsection