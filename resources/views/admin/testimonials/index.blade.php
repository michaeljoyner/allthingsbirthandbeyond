@extends('admin.base')

@section('content')
    <div class="dd-page-header">
        <h1 class="page-title">Testimonials</h1>
        <div class="page-header-actions">
            <testimonial-form url="/admin/testimonials" button-text="Add Testimonial"></testimonial-form>
        </div>
    </div>
    <testimonials-list :initial-list="{{ json_encode($testimonials->map->toJsonableArray()) }}"></testimonials-list>
@endsection