@extends('layouts.layout')

@section('title', 'Counter Page')

@section('content')
    <h1>Counter Page</h1>
    <p>The current value of the counter is: {{ $counter ? $counter->counter : 0 }}</p>
@endsection