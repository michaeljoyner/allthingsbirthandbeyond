@extends('admin.base')

@section('content')
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-700 my-12">Hi Mel</h1>
        <div class="max-w-4xl p-8 shadow">
            <p class="text-purple text-sm uppercase mb-6">Your daily inspiration</p>
            <p class="text-lg text-gray-800">{{ $quote['quote'] }}</p>
            <p class="quote-author">&mdash; {{ $quote['author'] }}</p>
        </div>
        <h3 class="text-2xl text-gray-600 my-8">Here are some things you need to know</h3>
        <div class="max-w-4xl p-8 shadow">
            <p class="text-purple text-sm uppercase mb-6">Articles</p>
            <ul class="text-sm text-gray-800">
                <li class="mb-2">Articles will appear in reverse chronological order based on their publish date.</li>
                <li class="mb-2">Articles will only show if they are published and their publish date is not in the future.</li>
                <li class="mb-2">All articles need a title image, which you set on the articles main page.</li>
                <li class="mb-2">Some handy places to get free images are <a href="https://unsplash.com">Unsplash</a> and
                    <a href="https://pexels.com">Pexels</a></li>
                <li class="mb-2">Make sure the title images are big enough (at least 1200px wide). The title image has a ratio of 2:1 (width:height). Images will be cropped automatically to enforce that.</li>
                <li class="mb-2">You can preview an article from your admin section before you publish it. You will find the preview button at the top right on the article page.</li>
            </ul>
        </div>
        <div class="max-w-4xl p-8 shadow my-12">
            <p class="text-purple text-sm uppercase mb-6">Testimonials</p><br><br>
            <ul class="text-sm">
                <li class="mb-2">Testimonials will appear on the site in the reverse order of which they were added (i.e. latest first).</li>
                <li class="mb-2">Testimonials will only show if they are published.</li>
                <li class="mb-2">An image is not required for a testimonial, and we recommend using them sparingly, if at all.</li>
                <li class="mb-2">The image used will be cropped to a 4:3 aspect ratio if not so already.</li>
                <li class="mb-2">If you want to change the testimonial on the home page, just tell us and we'll update it.</li>
            </ul>
        </div>
    </div>

@endsection
