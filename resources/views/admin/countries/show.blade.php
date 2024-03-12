@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalii</h1>
@stop

@section('content')
    <table class="table table-bordered mt-3">
        <tbody>
                <tr>
                    <td>Nume</td>
                    <td>{{$country->name}}</td>
                </tr>
                <tr>
                    <td>Currencies</td>
                    <td>{{$country->currencies}}</td>
                </tr>
                <tr>
                    <td>Region</td>
                    <td>{{$country->region}}</td>
                </tr>
                <tr>
                    <td>Population</td>
                    <td>{{$country->population}}</td>
                </tr>
        </tbody>
    </table>
@stop

@section('css')

@stop

@section('js')

@stop
