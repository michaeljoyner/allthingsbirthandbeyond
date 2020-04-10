<div class="px-6 pt-20 pb-24 bg-soft-pink">
    <p class="type-h1 text-purple text-center">Specialists I Love</p>
    <div>
        @foreach($affiliates as $affiliate_group)
        <div class="max-w-5xl mx-auto my-20">
            <p class="type-h2 text-purple text-center">{{ $affiliate_group['title'] }}</p>
            <div class="flex justify-center mt-6">
                @foreach($affiliate_group['items'] as $affiliate)
                <div class="w-28 h-28 md:w-48 md:h-48 mx-1 md:mx-6 border-2 border-navy">
                    @if($affiliate['link'])
                    <a href="{{ $affiliate['link'] }}" target="_blank" rel="noopener">
                    @endif
                    <img src="{{ $affiliate['image'] }}" alt="{{ $affiliate['name'] }}" class="h-full w-full object-cover">
                    @if($affiliate['link'])
                    </a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>