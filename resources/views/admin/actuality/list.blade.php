@extends('layouts.panel')

@section('title', 'List of actualities')

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

@section('panel-title', 'List of actualities')

@section('panel-body')
    <table id="data-table-combine" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th width="70%" class="text-nowrap" data-orderable="false">Titre</th>
            <th width="10%" class="text-nowrap" data-orderable="false">Date</th>
            <th width="20%" class="text-nowrap" data-orderable="false">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach( $actualities as $actuality )
                <tr>
                    <td>
                        <a href="{{ route("actualities.show", [ "actuality" => $actuality->id ])  }}">
                            {{ $actuality->title }}
                        </a>
                    </td>
                    <td>{{ $actuality->created_at }}</td>
                    <td class="actions">
                        <form method="post" action="{{ route('actualities.destroy', [ "actuality" => $actuality->id ]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Supprimer</button>
                        </form>
                        <a href="{{ route('actualities.edit', [ "actuality" => $actuality->id ]) }}" class="btn btn-sm btn-primary m-r-5">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection