@extends('layouts.masterpage')
@section('content')
    <h1>Calculation Results</h1>
    <p>a = {{ $a }}</p>
    <p>b = {{ $b }}</p>
    <p>a + b = {{ $c }}</p>
    <p>a - b = {{ $d }}</p>
    <p>a * b = {{ $e }}</p>
    <p>a / b = {{ $f }}</p>
@endsection
