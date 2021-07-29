@extends('layouts.app')

@section('content')

    @if (session('status'))

        {{ session('status') }}

    @endif

    <a href="{{route('article.create')}}">記事作成</a>

@endsection