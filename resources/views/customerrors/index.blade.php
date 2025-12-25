@extends('layouts.masterpage')

@section('content')
    <a href="{{ route('errors.show401') }}" class="btn btn-primary">401</a>
    <a href="{{ route('errors.show402') }}" class="btn btn-primary">402</a>
    <a href="{{ route('errors.show403') }}" class="btn btn-primary">403</a>
    <a href="{{ route('errors.show404') }}" class="btn btn-primary">404</a>
    <a href="{{ route('errors.show419') }}" class="btn btn-primary">419</a>
    <a href="{{ route('errors.show429') }}" class="btn btn-primary">429</a>
    <a href="{{ route('errors.show500') }}" class="btn btn-primary">500</a>

    <a href="{{ route('errors.calculation') }}" class="btn btn-primary">Calculate</a>
@endsection
