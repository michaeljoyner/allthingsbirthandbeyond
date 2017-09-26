@extends('admin.base')

@section('content')
    <h1>Hi Mel</h1>
    <div class="quote card">
        <p class="label">Your daily inspiration</p><br><br>
        <p class="quote-text lead">{{ $quote['quote'] }}</p>
        <p class="quote-author">&mdash; {{ $quote['author'] }}</p>
    </div>
    <h3>Here are some things you need to know</h3>
    <div class="card">
        <p class="label">Articles</p><br><br>
        <ul>
            <li>Articles will appear in reverse chronological order based on their publish date.</li>
            <li>Articles will only show if they are published and their publish date is not in the future.</li>
            <li>All articles need a title image, which you set on the articles main page.</li>
            <li>Some handy places to get free images are <a href="https://unsplash.com">Unsplash</a> and
                <a href="https://pexels.com">Pexels</a></li>
            <li>Make sure the title images are big enough (at least 1200px wide). The title image has a ratio of 2:1 (width:height). Images will be cropped automatically to enforce that.</li>
            <li>You can preview an article from your admin section before you publish it. You will find the preview button at the top right on the article page.</li>
        </ul>
    </div>
    <div class="card">
        <p class="label">Testimonials</p><br><br>
        <ul>
            <li>Testimonials will appear on the site in the reverse order of which they were added (i.e. latest first).</li>
            <li>Testimonials will only show if they are published.</li>
            <li>An image is not required for a testimonial, and we recommend using them sparingly, if at all.</li>
            <li>The image used will be cropped to a 4:3 aspect ratio if not so already.</li>
            <li>If you want to change the testimonial on the home page, just tell us and we'll update it.</li>
        </ul>
    </div>
@endsection
