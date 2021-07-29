@extends('layouts.app')

@section('content')

    @if (session('status'))

        {{ session('status') }}

    @endif

    <a href="{{route('article.index')}}">記事一覧</a>

    <form action="{{route('article.store')}}" method="POST">
        @csrf
        <input class="title" type="text">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <button type="submit">投稿</button>

    </form>

@endsection

