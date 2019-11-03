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
    Titre : {{ $actuality->title }} <br>
    Date : {{ $actuality->created_at }} <br>
    Contenu : {{ $actuality->content }} <br>
@endsection