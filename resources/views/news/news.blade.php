@extends('layouts.navbar')
@section('title', 'News')
@section('content')
<a href="{{ Route('news', ['id'=>1]) }}">Artikel 1</a>
@endsection