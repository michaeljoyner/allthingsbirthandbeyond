<article class="fade-in-up an-del1 mv4 w-90 mw8 center pa4 bgc-light body-type flex">
    <div class="dn w-40 flex-l justify-center items-start pt2">
        <img src="{{ $testimonial->imageUrl('thumb') }}" alt="{{ $testimonial->client }}" width="400px" class="db center">
    </div>
    <div class="w-100 w-60-l pl0 pl4-l flex-auto">
        <p class="colour-p f5 f4-ns lh-copy mt0">{{ $testimonial->body }}</p>
        <p class="colour-p f5 f4-ns lh-copy i tr mb0">&mdash; {{ $testimonial->client }}</p>
    </div>
</article>