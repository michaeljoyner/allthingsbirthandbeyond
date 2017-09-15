@extends('admin.base')

@section('head')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endsection

@section('content')
    <div class="dd-page-header">
        <h1 class="page-title">{{ $article->title }}</h1>
        <div class="page-header-actions">
            <a href="/admin/articles/{{ $article->id }}" class="btn dd-btn">Article</a>
        </div>
    </div>
    <editor post-id="{{ $article->id }}" :post-content="{{ json_encode($article->body) }}"></editor>
@endsection