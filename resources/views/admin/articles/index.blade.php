@extends('admin.base')

@section('content')
    <div class="dd-page-header">
        <h1 class="page-title">Blog</h1>
        <div class="page-header-actions">
            <article-form url="/admin/articles" button-text="New Post"></article-form>
        </div>
    </div>
    <articles-list :initial-list="{{ json_encode($articles) }}"></articles-list>
@endsection