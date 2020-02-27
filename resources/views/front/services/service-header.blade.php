<div>
    <h1 class="max-w-3xl mx-auto type-h1 text-purple text-center">{{ $title }}</h1>
    <img src="/images/illustrations/{{ $icon }}" class="my-12 mx-auto h-40" alt="{{ $title }}">
    <div class="max-w-2xl mx-auto border-b-2 border-purple">
    @foreach($terms as $term)
        <p class="type-h2 text-navy">{{ $term }}</p>
    @endforeach
    </div>
</div>