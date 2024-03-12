@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista tarile</h1>
@stop

@section('content')
    <a class="btn btn-dark" href="{{ route('countries.create') }}">Adauga</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nume</th>
                <th>Currencies</th>
                <th>Region</th>
                <th>Population</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @forelse($countries as $country)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$country->name}}</td>
                    <td>{{$country->currencies}}</td>
                    <td>{{ $country->region }}</td>
                    <td>{{ $country->population }}</td>
                    <td>
                        <a href="{{ route('countries.edit', ['country'=>$country->id]) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('countries.show', ['country'=>$country->id]) }}" class="btn btn-dark">Show</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td collspan="6">
                        No data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $countries->links() }}
@stop

@section('css')

@stop

@section('js')

@stop
