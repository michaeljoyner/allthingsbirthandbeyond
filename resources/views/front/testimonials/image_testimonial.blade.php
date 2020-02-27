<article class="fade-in-up p-16 bg-teal-soft max-w-3xl mx-auto mb-12 flex justify-between">
    <div class="hidden md:block w-2/5">
        <img src="{{ $testimonial->imageUrl('thumb') }}" alt="{{ $testimonial->client }}" width="400px" class="max-w-full mx-auto">
    </div>
    <div class="flex-1 pl-8">
        <p class="type-b1 text-navy mb-8">{{ $testimonial->body }}</p>
        <p class="type-b2 text-navy text-right">&mdash; {{ $testimonial->client }}</p>
    </div>
</article>