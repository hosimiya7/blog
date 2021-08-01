@extends('layouts.app')

@section('content')

    @if (session('status'))

        {{ session('status') }}

    @endif

    @include('article.header')

    <a href="{{route('article.create')}}">記事作成</a>

    @include('article.list')
    @include('article.footer')

@endsection


