@extends('layouts.app')

@section('content')

    @if (session('status'))

        {{ session('status') }}

    @endif


    @include('article.header')

    @include('article.content', $articles)
    @include('article.footer')

@endsection
