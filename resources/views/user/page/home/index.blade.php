@extends('user.main')
@section('content')
    @foreach ($product as $item)
        {{ $item }}
    @endforeach
@endsection
