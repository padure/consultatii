@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Adauga tara</h1>
@stop

@section('content')
    <div class="col-6">
        @include('partials.admin.errors')
        <form action="{{ route('countries.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" id="name" name="name" class="form-control @error('name', 'country') is-invalid @enderror"
                    placeholder="Nume">
            </div>
            <div class="mb-3">
                <label for="currencies" class="form-label"></label>
                <input type="text" id="currencies" name="currencies" class="form-control @error('name', 'country') is-invalid @enderror" placeholder="Currencies">
            </div>
            <div class="mb-3">
                <label for="region" class="form-label"></label>
                <input type="text" id="region" name="region" class="form-control @error('region', 'country') is-invalid @enderror" placeholder="Region">
            </div>
            <div class="mb-3">
                <label for="population" class="form-label"></label>
                <input type="text" id="population" name="population" class="form-control @error('population', 'country') is-invalid @enderror" placeholder="Population">
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
